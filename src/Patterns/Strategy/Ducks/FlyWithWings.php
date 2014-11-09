<?php

namespace DesignPatterns\Patterns\Strategy\Ducks;

use DesignPatterns\Patterns\Strategy\Ducks\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo 'Flyign with wings really high';
    }
}
