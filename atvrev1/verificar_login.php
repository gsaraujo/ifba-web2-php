<?php

    session_start();

    $usuarios = ["gustavo" => "1234",
                 "admin" => "1234",
                 "adm" => "1234",
                 "barto" => "1234",
    ];

    $informacoes_usuarios = [
        "gustavo" => [
            "nome" => "Gustavo",
            "sobrenome" => "Santana",
            "usuario" => "gustavo",
            "data_cadastro" => "10/10/2019",
        ],
        "admin" => [
            "nome" => "Admin",
            "sobrenome" => "Admin",
            "usuario" => "admin",
            "data_cadastro" => "10/10/2019",
        ],
        "adm" => [
            "nome" => "Adm",
            "sobrenome" => "Adm",
            "usuario" => "adm",
            "data_cadastro" => "10/10/2019",
        ],
        "barto" => [
            "nome" => "Barto",
            "sobrenome" => "Santana",
            "usuario" => "barto",
            "data_cadastro" => "10/10/2019",
        ]
    ];

    $_SESSION['usuarios_cadastrados'] = $usuarios;
    $_SESSION["informacoes_usuarios"] = $informacoes_usuarios;


    if(isset($_POST["usuario"]) && isset($_POST["senha"]) && isset($_POST["tema"])){
        foreach ($usuarios as $usuario => $senha) {
            if($usuario == $_POST["usuario"] && $senha == $_POST["senha"]){
                $_SESSION["usuario_logado"] = $usuario;//novo
                setcookie("tema", $_POST["tema"], time() + (86400));
                header("Location: bem_vindo.php?usuariologado=1");
                exit;
            }

        }
    }

    header("Location: index.php");
    exit;