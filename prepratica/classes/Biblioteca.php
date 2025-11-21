<?php

class Biblioteca
{
    private $acervo = array();
    private $clientes = array();
    private $emprestimos = array();

    public function addPessoa($pessoa) {
        $this->clientes[] = $pessoa->getMatricula();
    }

    public function addLivro($livro) {
        $this->acervo[] = $livro->getCodigo();
    }

    public function addEmprestimo($pessoa, $livro) {

        if (isset($this->emprestimos[$pessoa->getMatricula()])) {
            if (isset($this->emprestimos[$pessoa->getMatricula()][$livro->getCodigo()])) {
                $this->emprestimos[$pessoa->getMatricula()][$livro->getCodigo()]++;
            } else {
                $this->emprestimos[$pessoa->getMatricula()][$livro->getCodigo()] = 1;
            }
        } else {
            $this->emprestimos[$pessoa->getMatricula()] = [$livro->getCodigo() => 1];
        }
    }

    public function removerEmprestimo($pessoa, $livro) {

    }

}