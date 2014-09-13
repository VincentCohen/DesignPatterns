<?php namespace DesignPatters\Factory;

/**
 * Class Boat
 *
 * @package DesignPatters\Factory
 */
class Boat {

    /**
     * @var string
     */
    public $type = '';

    /**
     * @param $type
     */
    public function __construct(){}


    /**
     * @return string
     */
    public function sail() {
        return '<strong>'.$this->type.'</strong> Ayy! Setting sail';
    }

    /**
     * @return string
     */
    public function steer() {
        return '<strong>'.$this->type.'</strong> Steering captain!';
    }

    /**
     * @return string
     */
    public function dock() {
        return '<strong>'.$this->type.'</strong> Captain is leaving ship!';
    }

    /**
     * @return string
     */
    public function speedUp() {
        return '<strong>'.$this->type.'</strong>Speeding!!';
    }


    /**
     * @return string
     */
    public function slowDown() {
        return '<strong>'.$this->type.'</strong>Slowing..';
    }
}