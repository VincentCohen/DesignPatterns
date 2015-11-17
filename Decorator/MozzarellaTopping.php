<?php

class MozzarellaTopping implements ToppingInterface {

    const DESCRIPTION = 'Extra fancy mozzarella';

    const COST        = 5;

    protected $topping;

    public function __construct(ToppingInterface $topping)
    {
        $this->Topping = $topping;
    }

    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return $this->Topping->getDescription() . ', ' . self::DESCRIPTION;
    }

    /**
     * @inheritDoc
     */
    public function getCost()
    {
        return $this->Topping->getCost() + self::COST;
    }
}
