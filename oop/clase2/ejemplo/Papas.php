<?php

class Papas extends ProductoSimple
{
    public function __construct($descripcion, $precio)
    {
        $this->imagen = 'papas.jpg';
        $this->titulo = 'Papas';
        parent::__construct($descripcion, $precio);
    }
}
