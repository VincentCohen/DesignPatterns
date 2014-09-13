<?php namespace DesignPatters\Factory;

/**
 * Class MineSweeper
 *
 * @package DesignPatters\Factory
 */
class MineSweeper extends Boat {

    public function __construct()
    {
        $this->type = 'minesweeper';

        parent::__construct();
    }
}