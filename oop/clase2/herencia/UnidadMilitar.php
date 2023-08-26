<?php

abstract class UnidadMilitar
{
    protected $x;
    protected $y;

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function mover($x, $y)
    {
        echo 'Me estoy que moviendo<br>';
        $this->x = $x;
        $this->y = $y;
    }

    public function atacar($x, $y)
    {
        if ($this->estoyARango($x, $y)) {
            echo 'Estoy atacando<br>';
        } else {
            $this->mover($x, $y);
            $this->atacar($x, $y);
        }
    }

    abstract public function estoyARango($x, $y);
}
