<?php

namespace App\Traits;

trait HasPosition
{
    protected int $x;
    protected int $y;

    public function getX() : int
    {
        return $this->x;
    }

    public function getY() : int
    {
        return $this->y;
    }

    public function setPosition(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
