<?php

include_once "Pessoa.php";
class Funcionario extends Pessoa
{
    private $setor;

    public function __construct($nome, $matricula, $setor) {
        parent::__construct($nome, $matricula);
        $this->setor = $setor;
        $this->quantidadeMaximaDeLivros = QUANTIDADE_LIVROS_FUNCIONARIO;
    }

    public function pegarLivroEmprestado() {
        if ($this->quantidadeMaximaDeLivros <= 0) {
            return false;
        }
        $this->quantidadeMaximaDeLivros--;
        return true;

    }

    public function devolverLivroEmprestado() {
        if ($this->quantidadeMaximaDeLivros >= QUANTIDADE_LIVROS_FUNCIONARIO) {
            return false;
        }

        $this->quantidadeMaximaDeLivros++;
        return true;
    }

}