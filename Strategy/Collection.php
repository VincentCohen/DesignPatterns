<?php namespace DesignPatters\Strategy;

/**
 * Class Collection
 *
 * @package DesignPatters\Strategy
 */
class Collection {

    /**
     * @var array
     */
    private $data = array();

    /**
     * @var
     */
    private $output;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function setFormat(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function getDataFormatted()
    {
       return $this->output->format($this->data);
    }
}