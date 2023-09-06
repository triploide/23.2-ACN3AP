<?php

abstract class Personaje implements Renderizable, Dibujable
{
    use EsRederizable;
    
    protected int $x;
    protected int $y;
    
    public function __construct(int $x, int $y)
    {
        $this->mover($x, $y);
    }

    public function mover(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
