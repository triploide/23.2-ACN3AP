<?php

namespace App\Classes;

use App\Classes\Civis\Inca\Inca;
use App\Classes\Civis\Jemer\Jemer;

class Jugador
{
    // protected Civi $civi;
    // protected string $color;

    // public function __construct(Civi $civi, string $color)
    // {
    //     $this->civi = $civi;
    //     $this->color = $color;
    // }

    public function __construct(protected Civi $civi, protected string $color)
    {

    }

    public function crearCasa()
    {
        $this->civi->crearCasa();
    }

    public function crearCastillo()
    {
        $this->civi->crearCastillo();
    }
}
