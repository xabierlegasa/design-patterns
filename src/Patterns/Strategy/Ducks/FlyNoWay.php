<?php

namespace DesignPatterns\Patterns\Strategy\Ducks;

use DesignPatterns\Patterns\Strategy\Ducks\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo 'Ouch, I can not fly';
    }
}
