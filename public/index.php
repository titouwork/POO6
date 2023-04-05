<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';
require __DIR__ . '/../src/Other/Animal.php';
require __DIR__ . '/../src/Area.php';

use App\Area;
use App\Animal;
use App\Other\Animal as OtherAnimal;

$lion = new Animal('lion', 4);
$lion->setCarnivorous(true);
$lion->setSize(70);
$lion->setThreatenedLevel('VU');

$parrot = new Animal('parrot', 2);
$parrot->setSize(30);

$elephant = new Animal('elephant', 4);
$elephant->setThreatenedLevel('LCD');

$animals = [$lion, $parrot, $elephant];

/***************************************/
/***************************************/
$savana = new Area('savana');
$jungle = new Area ('jungle');
$areas = [$savana, $jungle];
$savana->addAnimal($lion);
$savana->addAnimal($elephant);
$jungle->addAnimal($parrot);



// Do not modify code below
require 'view.php';
?>