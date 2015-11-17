<?php

class CheeseTopping implements ToppingInterface {

    const DESCRIPTION = 'Cheese from the goat';

    const COST        = 12;

    protected $topping;

    public function __construct(ToppingInterface $topping)
    {
        $this->topping = $topping;
    }

    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return $this->topping->getDescription() . ', ' . self::DESCRIPTION;
    }

    /**
     * @inheritDoc
     */
    public function getCost()
    {
        return $this->topping->getCost() + self::COST;
    }
}
