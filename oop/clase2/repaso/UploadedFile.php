<?php

class UploadeFile
{
    public $data;

    public function __construct($name)
    {
        $this->data = $_FILES[$name];
    }

    public function getSize()
    {
        return $this->data['size'];
    }

    public function getExtension()
    {
        $name = $this->data['name'];

        $nameArray = explode('.', $name);

        return array_pop($nameArray);
    }

    public function save($path)
    {
        // TODO:
    }

    public function getFormattedSize()
    { 
        $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        $exponent = floor(log($this->getSize()) / log(1024));
        $value = round($this->getSize() / pow(1024, $exponent), 1) * 1;

        return $value . ' ' . $sizes[$exponent];
    } 
}