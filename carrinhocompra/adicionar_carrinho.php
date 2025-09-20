<?php

    session_start();

    if(isset($_COOKIE['usuario']) && isset($_COOKIE['tema'])){
        echo "<h1>Olá, " . $_COOKIE['usuario'] . "</h1>";
        echo "Seu tema escolhido foi " . $_COOKIE['tema'] . "<br>";
    }

    $produtos = [1 => ["nome_produto" => "Ração fantástica",
                       "qtde_estoque" => 2,
                       "preco_unitario" => 20],

                 2 => ["nome_produto" => "Pestiscos Saborosos",
                       "qtde_estoque" => 2,
                       "preco_unitario" => 20],

                 3 => ["nome_produto" => "Bolinha",
                       "qtde_estoque" => 2,
                       "preco_unitario" => 20],

                 4 => ["nome_produto" => "Petisco muito bom",
                       "qtde_estoque" => 2,
                       "preco_unitario" => 20],
    ];

    if(!isset($_SESSION['produtos'])){
        $_SESSION['produtos'] = $produtos;
    }

    if(isset($_GET["id"])){

        if(!isset($_SESSION["carrinho"])){
            $_SESSION["carrinho"] = null;
        }

        if(isset($_SESSION["carrinho"][$_GET["id"]])){
            $_SESSION["carrinho"][$_GET["id"]]["quantidade"] += 1;
        } else {
            $_SESSION["carrinho"][$_GET["id"]] = [];
            $_SESSION["carrinho"][$_GET["id"]]["nome_produto"] = $produtos[$_GET["id"]]["nome_produto"];
            $_SESSION["carrinho"][$_GET["id"]]["quantidade"] = 1;
            $_SESSION["carrinho"][$_GET["id"]]["preco_unitario"] = $produtos[$_GET["id"]]["preco_unitario"];
        }
        $_SESSION["produtos"][$_GET["id"]]["qtde_estoque"] -= 1;
    }

    foreach ($_SESSION['produtos'] as $key => $value) {
        echo "Produto: " . $value["nome_produto"] . "<br>";
        echo "Quantidade disponível: " . $value["qtde_estoque"] . "<br>";
        echo "Valor unitário: " . $value["preco_unitario"] . "<br>";
        echo "<a href='adicionar_carrinho.php?id=" . $key . "'>Adicionar ao carrinho</a><br>";
        echo "<br><hr><br>";
    }


    echo "<a href='ver_carrinho.php'>Visualizar carrinho</a>";

