<?php

class Aldeano
{
    public $vida;
    public $fuerza;
    public $nombre;

    public function __construct(string $nombre)
    {
        $this->vida = 500;
        $this->fuerza = 300;
        $this->nombre = $nombre;
    }

    public function atacar()
    {
        echo 'Te estoy acatando con una fuerza de ' . $this->fuerza . '<br>';
        $this->vida -= 10;
    }
}
