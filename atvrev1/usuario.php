<?php

    session_start();

    if(isset($_GET['usuario'])){
        foreach ($_SESSION["informacoes_usuarios"] as $usuario => $value) {
            if($usuario == $_GET['usuario']){
                foreach ($value as $informacao => $valor) {
                    echo $informacao . " => " . $valor ."<br>";
                }
            }
        }
    }