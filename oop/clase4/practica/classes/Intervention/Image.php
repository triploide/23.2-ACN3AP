<?php

namespace Practica\Intervention;

class Image
{
    private $resource;

    public function __construct($path)
    {
        $this->resource = imagecreatefromjpeg($path);
    }

    public function crop($width, $height)
    {
        $width = min($width, imagesx($this->resource));
        $height = min($height, imagesy($this->resource));

        $centerX = round(imagesx($this->resource) / 2);
        $centerY = round(imagesy($this->resource) / 2);

        $widthHalf  = round($width / 2);
        $heightHalf = round($height / 2);

        $x = max(0, $centerX - $widthHalf);
        $y = max(0, $centerY - $heightHalf);

        $this->resource = imagecrop($this->resource, ['x' => $x, 'y' => $y, 'width' => $width, 'height' => $height]);
    }

    public function save($path, $quality = 75)
    {
        imagejpeg($this->resource, $path, $quality);

        imagedestroy($this->resource);
    }
}
