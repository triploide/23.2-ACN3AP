<?php

class Arquero
{
    public $x = 0;
    public $y = 0;

    public function calcularDistancia($x, $y)
    {
        $distanciaX = $this->x - $x;
        $distanciaY = $this->y - $y;
        $distancia = sqrt($distanciaX * $distanciaX + $distanciaY * $distanciaY);

        return floor($distancia);
    }
}
