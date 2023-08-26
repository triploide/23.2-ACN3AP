<?php

class Scout extends UnidadMilitar
{
    public function estoyARango($x, $y)
    {
        return $this->x == $x && $this->y == $y;
    }
}
