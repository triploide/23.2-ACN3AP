<?php

trait EsRederizable
{
    public function render()
    {
        echo "<img width='80' src='{$this->getSprite()}' style='position: absolute; top: {$this->x}; left: {$this->y}'>";
    }
}