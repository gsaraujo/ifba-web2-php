<?php

include_once "Livro.php";
include_once "Funcionario.php";
include_once "Usuario.php";

class Biblioteca
{
    public $acervo = array();
    public $clientes = array();
    public $emprestimos = array();

    public function addPessoa($pessoa) {
        $this->clientes[] = $pessoa;
    }

    public function addLivro($livro) {
        $this->acervo[] = $livro;
    }

    public function pesquisaLivro($livro) {
        foreach ($this->acervo as $livroAcervo) {
            if ($livro->getCodigo() == $livroAcervo->getCodigo()) {
                return $livroAcervo;
            }
        }
        return null;
    }

    public function pesquisarPessoa($pessoa) {
        foreach ($this->clientes as $clienteBiblioteca) {
            if ($clienteBiblioteca->getMatricula() == $pessoa->getMatricula()) {
                return $clienteBiblioteca;
            }
        }
        return null;
    }

    public function addEmprestimo($pessoaParaPesquisa, $livroParaPesquisa) {

        $pessoa = $this->pesquisarPessoa($pessoaParaPesquisa);
        $livro = $this->pesquisaLivro($livroParaPesquisa);

        if(($pessoa != null) && ($livro != null)) {

            if ($pessoa->pegarLivroEmprestado()) {
                if ($livro->realizarEmprestimo()) {
                    if (isset($this->emprestimos[$pessoa->getMatricula()])) {
                        if (isset($this->emprestimos[$pessoa->getMatricula()][$livro->getCodigo()])) {
                            $this->emprestimos[$pessoa->getMatricula()][$livro->getCodigo()]++;
                        } else {
                            $this->emprestimos[$pessoa->getMatricula()][$livro->getCodigo()] = 1;
                        }
                    } else {
                        $this->emprestimos[$pessoa->getMatricula()] = [$livro->getCodigo() => 1];
                    }
                } else {
                    $pessoa->devolverLivroEmprestado();
                    echo "Empréstimo não realizado<br>";
                }
            } else {
                echo "Empréstimo não realizado<br>";
            }

        } else {
            echo "Empréstimo não realizado<br>";
            echo "Pessoa ou livro não identificado<br>";
        }

    }

    public function removerEmprestimo($pessoaParaPesquisa, $livroParaPesquisa) {

        $pessoa = $this->pesquisarPessoa($pessoaParaPesquisa);
        $livro = $this->pesquisaLivro($livroParaPesquisa);

        if(($pessoa != null) && ($livro != null)) {

            if (isset($this->emprestimos[$pessoa->getMatricula()])) {

                if (isset($this->emprestimos[$pessoa->getMatricula()][$livro->getCodigo()])) {
                    if ($this->emprestimos[$pessoa->getMatricula()][$livro->getCodigo()] > 0) {
                        $pessoa->devolverLivroEmprestado();
                        $livro->realizarDevolucao();
                        $this->emprestimos[$pessoa->getMatricula()][$livro->getCodigo()]--;
                        if ($this->emprestimos[$pessoa->getMatricula()][$livro->getCodigo()] == 0) {
                            unset($this->emprestimos[$pessoa->getMatricula()][$livro->getCodigo()]);
                        }
                    }
                }
            }
        } else {
            echo "Pessoa ou livro não identificado<br>";
        }

    }

}