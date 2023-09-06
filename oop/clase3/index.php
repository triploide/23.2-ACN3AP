<?php

require 'contracts/Dibujable.php';
require 'contracts/Renderizable.php';
require 'traits/EsRenderizable.php';
require 'classes/Juego.php';
require 'classes/Personaje.php';
require 'classes/Aldeano.php';
require 'classes/Arquero.php';
require 'classes/Edificio.php';
require 'classes/Casa.php';
require 'classes/Castillo.php';

$aldeano = new Aldeano(280, 50);
$arquero = new Arquero(370, 80);

$casa = new Casa(300, 150);
$castillo = new Castillo(400, 180);

$juego = new Juego;
$juego->agregarObjeto($aldeano);
$juego->agregarObjeto($arquero);
$juego->agregarObjeto($casa);
$juego->agregarObjeto($castillo);
$juego->renderizarObjectos();

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

$respuesta = ($aldeano instanceof Renderizable) ? 'Si' : 'No';
echo '¿$aldeano es una instancia de Renderizable? - ' . $respuesta;
echo '<hr>';

$respuesta = ($aldeano instanceof Dibujable) ? 'Si' : 'No';
echo '¿$aldeano es una instancia de Dibujable? - ' . $respuesta;
echo '<hr>';
