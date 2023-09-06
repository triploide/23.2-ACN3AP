<?php

abstract class Edificio implements Renderizable, Dibujable
{
    use EsRederizable;

    protected int $x;
    protected int $y;
    
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
