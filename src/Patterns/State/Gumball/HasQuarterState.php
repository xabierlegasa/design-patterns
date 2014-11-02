<?php

namespace DesignPatterns\Patterns\State\Gumball;

class HasQuarterState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo 'You can not insert another quarter';
    }

    public function ejectQuarter()
    {
        echo 'Quarter ejected';
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank()
    {
        echo 'You turned...';
        $lottery = rand(1, 10);

        // only go to winner state if the user was lucky AND we there are at least 2 balls
        if ($lottery == 1 && $this->gumballMachine->getCount() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense()
    {
        echo 'No gumball dispensed';
    }
}
