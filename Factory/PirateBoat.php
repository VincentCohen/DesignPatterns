<?php namespace DesignPatters\Factory;

/**
 * Class PirateBoat
 *
 * @package DesignPatters\Factory
 */
class PirateBoat extends Boat {

    public function __construct()
    {
        $this->type = 'pirateboat';

        parent::__construct();
    }
}