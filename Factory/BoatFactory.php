<?php namespace DesignPatters\Factory;

class BoatFactory {

    public static function create($boat = '')
    {

        switch ($boat)
        {
            case "pirate":
                return new \DesignPatters\Factory\PirateBoat();
                break;
            case "speed":
                return new \DesignPatters\Factory\SpeedBoat();
                break;
            default:
                return new \DesignPatters\Factory\MineSweeper();
                break;
        }

    }

}