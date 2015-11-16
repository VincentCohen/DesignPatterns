<?php
include "ToppingInterface.php";
include "BasicSandwich.php";
include "MozzarellaTopping.php";
include "CheeseTopping.php";
include "MayonaiseTopping.php";

$sandwich = new MayonaiseTopping(
    new CheeseTopping(
        new MozzarellaTopping(
            new BasicTopping()
        )
    )
);

echo "I would like to order a: " . $sandwich->getDescription();
echo "\n";
echo $sandwich->getCost();
