<?php

use Practica\Database\Image;
use Practica\Intervention\Image as Intervention;

require 'classes/Database/Image.php';
require 'classes/Intervention/Image.php';

$image = Image::find(1);
$src = $image->getSrc();

$fileImage = new Intervention($image->getSrc());
$fileImage->crop(150, 100);
$fileImage->save('assets/shrek-thumb.jpg');

var_dump(Image::class, Intervention::class);


