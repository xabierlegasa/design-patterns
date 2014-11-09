<?php

namespace DesignPatterns\Patterns\Strategy\Ducks;

class MallardDuck extends  Duck
{
    public function __construct()
    {
        $quack = new Quack();
        $flyWithWings = new FlyWithWings();
        parent::__construct($flyWithWings, $quack);
    }

}
