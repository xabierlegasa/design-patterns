<?php

namespace DesignPatterns\Patterns\Decorator\Beverages;

class Latte extends CondimentDecorator
{
    private $beverage;

    function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    function getDescription()
    {
        return $this->getDescription() . ', latte';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.10;
    }
}
