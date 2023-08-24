<?php

class Combo extends Producto
{
    private $productos;

    public function __construct($descripcion)
    {
        $this->imagen = 'combo.png';
        $this->titulo = 'Combo 1';
        $this->productos = [];
        parent::__construct($descripcion);
    }

    public function agregarProducto($producto)
    {
        $this->productos[] = $producto;
    }

    public function getPrecio()
    {
        $precio = 0;

        foreach ($this->productos as $producto) {
            $precio += $producto->getPrecio();
        }

        return $precio;
    }

}
