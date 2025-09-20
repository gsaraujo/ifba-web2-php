<?php
    session_start();
    unset($_SESSION['carrinho']);
    header("location: ver_carrinho.php");
    exit;