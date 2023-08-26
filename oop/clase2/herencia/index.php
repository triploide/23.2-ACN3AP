<?php

require 'UnidadMilitar.php';
require 'Arquero.php';
require 'Scout.php';

$arquero = new Arquero(0, 0, 'Patrullar');
echo $arquero->getX();
echo $arquero->atacar(4, 5);

echo '-----<br>';

$scout = new Scout(0, 0);
echo $scout->atacar(1, 1);
