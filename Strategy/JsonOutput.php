<?php namespace DesignPatters\Factory;

use DesignPatters\Strategy\OutputInterface;

/**
 * Class JsonOutput
 *
 * @package DesignPatters\Factory
 */
class JsonOutput implements OutputInterface {

    /**
     * @param array $data
     *
     * @return string
     */
    public function format(array $data)
    {
        return json_encode($data);
    }
}
