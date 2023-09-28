<?php

use App\Classes\Civis\Inca\Inca;
use App\Classes\Civis\Jemer\Jemer;
use App\Classes\Jugador;

echo '<pre>';

require 'vendor/autoload.php';

$jemer = new Jemer('Jemer');
$inca = new Inca('Inca');

$jugador1 = new Jugador($jemer, 'rojo');
$jugador2 = new Jugador($inca, 'azul');

$jugador1->crearCasa();
$jugador2->crearCasa();

$jugador1->crearCastillo();
$jugador2->crearCastillo();

// var_dump($jugador1, $jugador2);
