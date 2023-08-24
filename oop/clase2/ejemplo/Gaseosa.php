<?php

class Gaseosa extends ProductoSimple
{
    public function __construct($descripcion, $precio)
    {
        $this->imagen = 'gaseosa.png';
        $this->titulo = 'Gaseosa';
        parent::__construct($descripcion, $precio);
    }
}
