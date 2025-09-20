<?php

    session_start();

    if(isset($_SESSION['carrinho'])){

        foreach ($_SESSION['carrinho'] as $key => $value) {
            echo "Produto: " . $value["nome_produto"] . "<br>";
            echo "Quantidade: " . $value["quantidade"] . "<br>";
            echo "Preço: " . $value["preco_unitario"] . "<br>";
            echo "Subtotal: " . $value["quantidade"] * $value["preco_unitario"] . "<br>";
            echo "<a href='remover_item.php?id=" . $key . "'>Remover item</a><br>";

            echo "<hr><br>";

        }

        echo "<a href='limpar_carrinho.php'>Limpar Carrirnho</a>";

    } else {
        echo "Carrinho vazio";
    }

    echo "<hr><br>";
    echo "<a href='adicionar_carrinho.php'>Lista de produtos</a>";