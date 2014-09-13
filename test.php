<?php
include("Factory/Boat.php");
include("Factory/BoatInterface.php");
include("Factory/BoatFactory.php");
include("Factory/PirateBoat.php");
include("Factory/SpeedBoat.php");
include("Factory/MineSweeper.php");

$factory = new DesignPatters\Factory\BoatFactory();

$pirateBoat = $factory::create('pirate');
print_r ($pirateBoat->sail().'<br/>');
print_r ($pirateBoat->steer().'<br/>');
print_r ($pirateBoat->dock() .'<br/>');

$speed = $factory::create('speed');
print_r ($speed->sail().'<br/>');
print_r ($speed->steer().'<br/>');
print_r ($speed->dock() .'<br/>');