<?php
include("Strategy/OutputInterface.php");
include("Strategy/CsvOutput.php");
include("Strategy/JsonOutput.php");
include("Strategy/Collection.php");

$data = array(
    'foo' => 'bar',
    'john' => 'doe'
);

$collection = new DesignPatters\Strategy\Collection($data);
$collection->setFormat(new \DesignPatters\Factory\JsonOutput());

echo $collection->getDataFormatted();


die;
/*
 * Factory
 */
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