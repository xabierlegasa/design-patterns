<?php

namespace DesignPatterns\Patterns\State\Gumball;

class GumballMachine
{
    /**
     * @var DesignPatterns\Patterns\State\Gumball\NoQuarterState
     */
    private $noQuarterState;
    /**
     * @var DesignPatterns\Patterns\State\Gumball\HasQuarterState
     */
    private $hasQuarterState;
    /**
     * @var DesignPatterns\Patterns\State\Gumball\SoldState
     */
    private $soldState;
    /**
     * @var DesignPatterns\Patterns\State\Gumball\SoldOutState
     */
    private $soldOutState;
    /**
     * @var DesignPatterns\Patterns\State\Gumball\WinnerState
     */
    private $winnerState;
    /**
     * @var int
     */
    private $numGumballs = 0;

    /**
     * @var DesignPatterns\Patterns\State\Gumball\State
     */
    private $state;

    public function __construct($numGumballs)
    {
        $this->numGumballs = $numGumballs;
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->soldOutState = new SoldOutState($this);
        $this->winnerState = new WinnerState($this);

        if ($numGumballs > 0) {
            $this->state = $this->noQuarterState;
        } else {
            $this->state = $this->soldOutState;
        }
    }

    public function getCount()
    {
        return $this->numGumballs;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        return $this->state->dispense();
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getSoldState()
    {
        return $this->soldState;
    }

    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    public function getWinnerState()
    {
        return $this->winnerState;
    }

    public function releaseBall()
    {
        if ($this->numGumballs != 0) {
            $this->numGumballs = $this->numGumballs - 1;
        }
        echo "Here you have the ball";
        return new Gumball();
    }
}

