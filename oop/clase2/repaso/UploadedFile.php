<?php

class UploadeFile
{
    public function getSize()
    {
        return 1232220;
    }

    public function getFormattedSize()
    { 
        $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        $exponent = floor(log($this->getSize()) / log(1024));
        $value = round($this->getSize() / pow(1024, $exponent), 1) * 1;

        return $value . ' ' . $sizes[$exponent];
    } 
}