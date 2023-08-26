<?php

class Arquero extends UnidadMilitar
{
    public $rango = 5;
    private $modo; // 'seguir, patrullar, defender terreno'

    public function __construct(int $x, int $y, $modo)
    {
        parent::__construct($x, $y);
        $this->modo = $modo;
    }

    public function estoyARango($x, $y)
    {
        return $this->rango >= $this->calcularDistancia($x, $y);
    }

    private function calcularDistancia($x, $y)
    {
        $distanciaX = $this->x - $x;
        $distanciaY = $this->y - $y;
        $distancia = sqrt($distanciaX * $distanciaX + $distanciaY * $distanciaY);

        return floor($distancia);
    }
}
