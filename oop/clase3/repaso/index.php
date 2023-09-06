<?php

require 'traits/IsSelectionable.php';
require 'traits/HasPosition.php';
require 'contracts/Mobile.php';
require 'contracts/Positionable.php';
require 'contracts/Selectionable.php';
require 'classes/Character.php';
require 'classes/Villager.php';
require 'classes/Archer.php';
require 'classes/Resource.php';
require 'classes/Tree.php';
require 'classes/StoneMine.php';
require 'classes/Game.php';
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




