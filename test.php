<?php
echo '<pre>';
include("Factory/Boat.php");
include("Factory/BoatInterface.php");
include("Factory/BoatFactory.php");
include("Factory/PirateBoat.php");

$factory = new BoatFactory();
$pirateBoat = $factory::create('pirate');
$pirateBoat->sail(); echo "\n";
$pirateBoat->steer(); echo "\n";
$pirateBoat->dock();