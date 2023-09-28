<?php

namespace App\Classes;

use App\Contracts\Mobile;
use App\Contracts\Positionable;
use App\Contracts\Selectionable;

class Game
{
    private array $objects;

    public function __construct()
    {
        $this->objects = [];
    }

    public function addToMap(Positionable $object)
    {
        $this->objects[] = $object;
    }

    /**
     * @param int $x1 Top Left
     * @param int $y1 Top Left
     * @param int $x2 Bottom Rigth
     * @param int $y2 Bottom Rigth
     */
    public function select(int $x1, int $y1, int $x2, int $y2)
    {
        foreach ($this->selectionables() as $object) {
            if ($object->getX() > $x1 && $object->getX() < $x2 && $object->getY() > $y1 && $object->getY() < $y2) {
                $object->setSelected(true);
            }
        }
    }

    public function click(int $x, int $y)
    {
        foreach ($this->seleteds() as $object) {
            // Se puede mover
            if ($object instanceof Mobile) {
                $object->moveTo($x, $y);
            }

            $object->setSelected(false);
        }
    }

    public function selectionables() : array
    {
        return array_filter($this->objects, function ($object) {
            return $object instanceof Selectionable;
        });
    }

    public function mobiles() : array
    {
        return array_filter($this->objects, function ($object) {
            return $object instanceof Mobile;
        });
    }

    public function seleteds() : array
    {
        return array_filter($this->selectionables(), function ($object) {
            return $object->isSelected();
        });
    }
}
