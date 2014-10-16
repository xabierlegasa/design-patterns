<?php

namespace DesignPatterns\Patterns\Decorator\Beverages;

class Whip extends CondimentDecorator
{
    private $beverage;

    function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    function getDescription()
    {
        return $this->getDescription() . ', whip';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.10;
    }
}
