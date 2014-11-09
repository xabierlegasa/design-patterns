<?php

namespace DesignPatterns\Patterns\Strategy\Ducks;

abstract class Duck
{
    /**
     * @var \DesignPatterns\Patterns\Strategy\FlyBehavior
     */
    private $flyBehavior;
    /**
     * @var \DesignPatterns\Patterns\Strategy\QuackBehavior
     */
    private $quackBehavior;

    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }
}