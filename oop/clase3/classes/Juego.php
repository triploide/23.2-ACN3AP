<?php

class Juego
{
    private array $objetos;

    public function __construct()
    {
        $this->objetos = [];
    }

    public function agregarObjeto($objeto)
    {
        $this->objetos[] = $objeto;
    }

    public function renderizarObjectos()
    {
        foreach($this->objetos as $objeto) {
            $objeto->render();
        }
    }
}
