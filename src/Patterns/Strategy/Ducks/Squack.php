<?php

namespace DesignPatterns\Patterns\Strategy\Ducks;

use DesignPatterns\Patterns\Strategy\Ducks\QuackBehavior;

class Squack implements QuackBehavior
{
    public function quack()
    {
        echo 'Squaaaaaak';
    }
}
