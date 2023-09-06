<?php

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
