<?php

namespace App\Classes;

abstract class Civi
{
    public function __construct(protected string $nombre) {
        
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    abstract public function crearCasa();

    abstract public function crearCastillo();
}
