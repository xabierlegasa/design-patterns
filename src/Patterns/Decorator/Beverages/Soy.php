<?php

namespace DesignPatterns\Patterns\Decorator\Beverages;

class Soy extends CondimentDecorator
{
    private $beverage;

    function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    function getDescription()
    {
        return $this->getDescription() . ', soy';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.15;
    }
}
