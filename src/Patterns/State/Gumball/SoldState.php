<?php

namespace DesignPatterns\Patterns\State\Gumball;

class SoldState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo 'Please wait we give you a gumball';
    }

    public function ejectQuarter()
    {
        echo 'Sorry, you already turned the crank';
    }

    public function turnCrank()
    {
        echo 'Turning twice doesnt get you another gumball!';
    }

    public function dispense()
    {
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        }

        $balls = array();
        $balls[] = $this->gumballMachine->releaseBall();

        return $balls;
    }
}
