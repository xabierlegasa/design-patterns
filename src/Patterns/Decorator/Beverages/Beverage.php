<?php

abstract class Beverage
{
    protected $description = 'unknown beverage';
    protected $cost = 0;

    public function getDescription()
    {
        return $this->description;
    }

    abstract public function cost();
}
