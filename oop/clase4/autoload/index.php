<?php

require 'vendor/autoload.php';

use App\Classes\Archer;
use App\Classes\Game;
use App\Classes\StoneMine;
use App\Classes\Tree;
use App\Classes\Villager;

echo '<pre>';

$game = new Game;

$villager = new Villager(28, 34);
$archer = new Archer(15, 22);
$stoneMine = new StoneMine(33, 48);
$tree = new Tree(12, 39);

$game->addToMap($villager);
$game->addToMap($archer);
$game->addToMap($stoneMine);
$game->addToMap($tree);

$game->select(14,0, 100,100);

var_dump($villager, $archer, $stoneMine, $tree);

$game->click(20, 40);

echo '<hr>';

var_dump($villager, $archer, $stoneMine, $tree);


// var_dump($game->mobiles());




