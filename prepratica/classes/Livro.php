<?php

class Livro
{
    private $codigo;
    private $titulo;
    private $autor;
    private $quantidadeDeCopias;



    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getQuantidadeDeCopias()
    {
        return $this->quantidadeDeCopias;
    }

    /**
     * @param mixed $quantidadeDeCopias
     */
    public function setQuantidadeDeCopias($quantidadeDeCopias)
    {
        $this->quantidadeDeCopias = $quantidadeDeCopias;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function realizarEmprestimo() {
        if ($this->quantidadeDeCopias <= 0) {
            return false;
        }
        $this->quantidadeDeCopias--;
        return true;

    }

    public function realizarDevolucao() {
        if ($this->quantidadeDeCopias >= QUANTIDADE_COPIAS_PADRAO) {
            return false;
        }

        $this->quantidadeDeCopias++;
        return true;
    }



}