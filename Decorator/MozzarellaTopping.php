<?php

class MozzarellaTopping implements ToppingInterface {

    const DESCRIPTION = 'Extra fancy mozzarella';

    const COST        = 5;

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
