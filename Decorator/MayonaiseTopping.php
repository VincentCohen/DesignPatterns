<?php

class MayonaiseTopping implements ToppingInterface {

    const DESCRIPTION = 'Belgian Mayo';

    const COST        = 2.75;

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
