<?php

namespace App\Classes;

use App\Contracts\Positionable;
use App\Contracts\Selectionable;
use App\Traits\HasPosition;
use App\Traits\IsSelectionable;

abstract class Resource implements Positionable, Selectionable
{
    use HasPosition;
    use IsSelectionable;
    
    public function __construct(int $x, int $y)
    {
        $this->setPosition($x, $y);
        $this->selected = false;
    }
}
