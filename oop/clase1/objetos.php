<?php

require 'Aldeano.php';

// $int = 7;
// $string = "string";
// $array = [1,2,3];

// Instanciar objeto
// $aldeano = new Aldeano;
// $aldeano->atacar(); // usar un método
// var_dump($aldeano);
// $aldeano->atacar();
// var_dump($aldeano);
// $aldeano->atacar();
// var_dump($aldeano);

// $aldeano2 = new Aldeano;
// var_dump($aldeano2);

// echo $aldeano->vida - $aldeano->fuerza;

echo '<pre>';
$aldeano = new Aldeano('Pepito');
var_dump($aldeano);

$aldeano2 = new Aldeano('Don José');
var_dump($aldeano2);
