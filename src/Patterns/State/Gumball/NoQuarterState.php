<?php

namespace DesignPatterns\Patterns\State\Gumball;

class NoQuarterState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo 'Quarter inserted';
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo 'There is no quarter to eject';
    }

    public function turnCrank()
    {
        echo 'Enter first a quarter, to get a gumball';
    }

    public function dispense()
    {
        echo 'Enter first a quarter, to get a gumball';
    }
}
