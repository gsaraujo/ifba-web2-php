<?php

class Usuario extends Pessoa
{

    public function __construct($nome, $matricula) {
        parent::__construct($nome, $matricula);
        $this->quantidadeMaximaDeLivros = 2;
    }

}