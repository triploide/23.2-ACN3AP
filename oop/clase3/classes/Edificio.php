<?php

abstract class Edificio
{
    protected int $x;
    protected int $y;
    protected string $sprite;
    
    public function __construct(int $x, int $y, string $sprite)
    {
        $this->x = $x;
        $this->y = $y;
        $this->sprite = $sprite;
    }

    public function render()
    {
        echo "<img width='80' src='{$this->sprite}' style='position: absolute; top: {$this->x}; left: {$this->y}'>";
    }
}
