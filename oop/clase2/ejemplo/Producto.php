<?php

abstract class Producto
{
    protected $imagen;
    protected $titulo;
    protected $descripcion;

    public function __construct($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    abstract public function getPrecio();
}
