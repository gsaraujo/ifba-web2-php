<?php

include_once "Pessoa.php";
class Usuario extends Pessoa
{

    public function __construct($nome, $matricula) {
        parent::__construct($nome, $matricula);
        $this->quantidadeMaximaDeLivros = QUANTIDADE_LIVROS_USUARIO;
    }

    public function pegarLivroEmprestado() {
        if ($this->quantidadeMaximaDeLivros <= 0) {
            return false;
        }
        $this->quantidadeMaximaDeLivros--;
        return true;

    }

    public function devolverLivroEmprestado() {
        if ($this->quantidadeMaximaDeLivros == QUANTIDADE_LIVROS_USUARIO) {
            return false;
        }

        $this->quantidadeMaximaDeLivros++;
        return true;
    }

}