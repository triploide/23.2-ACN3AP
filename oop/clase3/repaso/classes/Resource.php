<?php

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
