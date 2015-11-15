<?php

class CheeseTopping implements ToppingInterface {

    const DESCRIPTION = 'Cheese from the goat';

    const COST        = 12;

    protected $Topping;

    public function __construct(ToppingInterface $Topping)
    {
        $this->Topping = $Topping;
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
