<?php namespace DesignPatters\Factory;

/**
 * Class SpeedBoat
 *
 * @package DesignPatters\Factory
 */
class SpeedBoat extends Boat {

    public function __construct()
    {
        $this->type = 'speedboat';

        parent::__construct();
    }
}