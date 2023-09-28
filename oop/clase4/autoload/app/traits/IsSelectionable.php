<?php

namespace App\Traits;

trait IsSelectionable
{
    protected bool $selected;

    public function isSelected() : bool
    {
        return $this->selected;
    }

    public function setSelected(bool $selected)
    {
        $this->selected = $selected;
    }
}
