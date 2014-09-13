<?php namespace DesignPatters\Strategy;

/**
 * Interface OutputInterface
 *
 * @package DesignPatters\Strategy
 */
interface OutputInterface {

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function format(array $data);

}