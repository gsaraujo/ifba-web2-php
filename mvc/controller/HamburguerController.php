<?php
class HamburguerController {
    public function listar() {
        // Pede ao Model todos os hambúrgueres
        $hamburguers = Hamburguer::listarTodos();
        // Chama a View, passando os dados
        include __DIR__ . '/../view/hamburguer/lista.php';
    }
}