<?php

class ProductoSimple extends Producto
{
    protected $precio;

    public function __construct($descripcion, $precio)
    {
        $this->precio = $precio;
        parent::__construct($descripcion);
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}