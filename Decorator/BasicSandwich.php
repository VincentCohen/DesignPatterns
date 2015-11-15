<?php
use ToppingInterface;

class BasicTopping implements ToppingInterface{

    const DESCRIPTION   = 'White bread with extra tastings';

    const COST          = 5;

    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return self::DESCRIPTION;
    }

    /**
     * @inheritDoc
     */
    public function getCost()
    {
        return self::COST;
    }
}
