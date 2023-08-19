<?php

declare(strict_types=1);

require 'Aldeano.php';

$aldeano = new Aldeano(20, 30);
$aldeano->presentarme();

$aldeano2 = new Aldeano(15, 50);
$aldeano2->presentarme();
$aldeano2->atacar($aldeano);


