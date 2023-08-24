<?php

class Burger extends ProductoSimple
{
    public function __construct($descripcion, $precio)
    {
        $this->imagen = 'burger.jpg';
        $this->titulo = 'Hamburguesa';
        parent::__construct($descripcion, $precio);
    }
}
