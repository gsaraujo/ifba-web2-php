<?php
class Hamburguer {
    private $id;
    private $nome;

    public function __construct($id, $nome) {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    // Simula busca no banco de dados
    public static function listarTodos() {
        return [
            new Hamburguer(1, 'Clássico'),
            new Hamburguer(2, 'Cheddar Bacon'),
            new Hamburguer(3, 'Veggie')
        ];
    }
}