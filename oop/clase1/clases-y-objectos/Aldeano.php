<?php

declare(strict_types=1);

class Aldeano
{
    public $vida;
    public $x;
    public $y;

    public function __construct(int $x, int $y)
    {
        $this->vida = 25;
        $this->x = $x;
        $this->y = $y;
    }

    public function mostrarVida()
    {
        echo 'Tengo una vida todal de: ' . $this->vida . '<br>';
    }

    public function presentarme()
    {
        echo 'Mi vida es de: ' . $this->vida . ' y mi posición es: (' . $this->x . ',' . $this->y . ')<br>';
    }

    public function atacar(Aldeano $contrincante)
    {
        // TODO:
    }
}
