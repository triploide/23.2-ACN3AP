<?php

namespace App\Contracts;

interface Positionable
{
    public function getX() : int;

    public function getY() : int;

    public function setPosition(int $x, int $y);
}
