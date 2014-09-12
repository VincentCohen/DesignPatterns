<?php

class BoatFactory {

    public static function create($boat)
    {
        switch ($boat)
        {
            case "pirate":
                return new PirateBoat();
                break;
            case "speed":
                return new SpeedBoat();
                break;
            default:
                return new MineSweeper();
                break;
        }
    }

}