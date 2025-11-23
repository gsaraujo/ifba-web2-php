<?php

    include "config.php";

    include_once "classes/Biblioteca.php";


    $funcionario = new Funcionario("Barto","4321","TI");
    $usuario = new Usuario("Gustavo","1234");

    $livro = new Livro("123","Harry Potter 1","JK");
    $livroDois = new Livro("111","Harry Potter 2","JK");
    $livroTres = new Livro("112","Harry Potter 3","JK");

    $biblioteca = new Biblioteca();

    $biblioteca->addLivro($livro);
    $biblioteca->addLivro($livroDois);
    $biblioteca->addLivro($livroTres);

    $biblioteca->addPessoa($usuario);
    $biblioteca->addPessoa($funcionario);

    for ($i = 1; $i <= 10; $i++) {
        $biblioteca->addEmprestimo($funcionario,$livro);
        $biblioteca->addEmprestimo($funcionario,$livroDois);
    }

    for ($i = 1; $i <= 10; $i++) {
        $biblioteca->removerEmprestimo($funcionario,$livro);

    }

    for ($i = 1; $i <= 10; $i++) {

    }

    echo "<pre>";
    var_dump($biblioteca->emprestimos);

    echo "</pre>";

    echo "<pre>";
    var_dump($biblioteca->acervo);
    echo "</pre>";

    echo "<pre>";
    var_dump($biblioteca->clientes);
    echo "</pre>";