<?php
/*
4. index.php (roteador simples)
*/
// Inclui Model e Controller
require_once __DIR__ . '/model/Hamburguer.php';
require_once __DIR__ . '/controller/HamburguerController.php';

// Qual ação o usuário quer?
$acao = isset($_GET['acao']) ? $_GET['acao'] : 'listar';

$controller = new HamburguerController();
if ($acao === 'listar') {
    $controller->listar();
} else {
    echo "Ação desconhecida.";
}