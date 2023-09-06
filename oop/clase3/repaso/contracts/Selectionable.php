<?php

interface Selectionable
{
    public function isSelected() : bool;

    public function setSelected(bool $selected);
}
