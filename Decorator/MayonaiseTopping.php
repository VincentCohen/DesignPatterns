<?php

class MayonaiseTopping implements ToppingInterface {

    const DESCRIPTION = 'Belgian Mayo';

    const COST        = 2.75;

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
