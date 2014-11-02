<?php

namespace DesignPatterns\Patterns\State\Gumball;

class WinnerState implements State
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
        $balls = array();
        $balls[] = $this->gumballMachine->releaseBall();

        // after the normal release, check if we can give the second one
        if ($this->gumballMachine->getCount() == 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $balls[] = $this->gumballMachine->releaseBall();
            echo 'You are a winner, you got 2 gumballs for your quarter!';
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo 'Oops, out of gumballs. Notify the resposible by push, SMS or so';
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }

        return $balls;
    }
}
