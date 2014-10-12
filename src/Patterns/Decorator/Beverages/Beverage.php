<?php

public abstract class Beverage
{
    private $description = 'unknown beverage';

    public function getDescription()
    {
        return $this->description;
    }
}
