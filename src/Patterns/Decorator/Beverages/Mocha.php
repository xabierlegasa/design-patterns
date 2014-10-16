<?php

namespace DesignPatterns\Patterns\Decorator\Beverages;

class Mocha extends CondimentDecorator
{
    private $beverage;

    function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    function getDescription()
    {
        return $this->getDescription() . ', mocha';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.2;
    }
}
