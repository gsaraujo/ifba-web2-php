<?php

    session_start();

    if(isset($_GET["usuariologado"])) {
        if($_GET["usuariologado"] == 1) {
            echo "<h1>Bem vindo, " . $_SESSION["usuario_logado"] . "!</h1>";
        }
    }

    foreach ($_SESSION['usuarios_cadastrados'] as $usuario => $senha) {
        echo $usuario . " - " . "<a href=\"usuario.php?usuario=" . $usuario . "\">" . $usuario . "</a><br>";
    }