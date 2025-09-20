<?php

    if(isset($_POST["usuario"]) && isset($_POST["senha"]) && isset($_POST["tema"])){
        setcookie("usuario", $_POST["usuario"], time() + (86400 * 30));
        setcookie("tema", $_POST["tema"], time() + (86400 * 30));
        header("Location: adicionar_carrinho.php");
        exit;
    }
    header("Location: index.php");
    exit;

