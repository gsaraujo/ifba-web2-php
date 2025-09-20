<?php
    session_start();

    unset($_SESSION['carrinho'][$_GET['id']]);
    header("location: ver_carrinho.php");
    exit;
