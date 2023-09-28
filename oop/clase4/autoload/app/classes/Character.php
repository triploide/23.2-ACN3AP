<?php

namespace App\Classes;

use App\Contracts\Mobile;
use App\Contracts\Positionable;
use App\Contracts\Selectionable;
use App\Traits\HasPosition;
use App\Traits\IsSelectionable;

abstract class Character implements Positionable, Selectionable, Mobile
{
    use HasPosition;
    use IsSelectionable;
    
    public function __construct(int $x, int $y)
    {
        $this->moveTo($x, $y);
        $this->selected = false;
    }

    public function moveTo(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
