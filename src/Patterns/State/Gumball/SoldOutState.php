<?php

namespace DesignPatterns\Patterns\State\Gumball;

class SoldOutState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo 'Please wait that we fill in the machine';
    }

    public function ejectQuarter()
    {
        echo 'Please wait that we fill in the machine';
    }

    public function turnCrank()
    {
        echo 'Please wait that we fill in the machine';
    }

    public function dispense()
    {
        echo 'Please wait that we fill in the machine';
    }
}
