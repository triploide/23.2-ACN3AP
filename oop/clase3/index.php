<?php

require 'classes/Juego.php';
require 'classes/Personaje.php';
require 'classes/Aldeano.php';
require 'classes/Arquero.php';
require 'classes/Edificio.php';
require 'classes/Casa.php';
require 'classes/Castillo.php';

$aldeano = new Aldeano(30, 50, 'assets/aldeano.png');
$arquero = new Arquero(120, 80, 'assets/arquero.png');

$casa = new Casa(50, 150, 'assets/casa.png');
$castillo = new Castillo(150, 180, 'assets/castillo.png');

// $juego = new Juego;
// $juego->agregarObjeto($aldeano);
// $juego->agregarObjeto($arquero);
// $juego->agregarObjeto($casa);
// $juego->agregarObjeto($castillo);
// $juego->renderizarObjectos();

$respuesta = ($aldeano instanceof Aldeano) ? 'Si' : 'No';
echo '¿$aldeano es una instancia de Aldeano? - ' . $respuesta;
echo '<hr>';

$respuesta = ($aldeano instanceof Personaje) ? 'Si' : 'No';
echo '¿$aldeano es una instancia de Personaje? - ' . $respuesta;
echo '<hr>';

$respuesta = ($arquero instanceof Personaje) ? 'Si' : 'No';
echo '¿$arquero es una instancia de Personaje? - ' . $respuesta;
echo '<hr>';

$respuesta = ($aldeano instanceof Arquero) ? 'Si' : 'No';
echo '¿$aldeano es una instancia de Arquero? - ' . $respuesta;
echo '<hr>';

