<?php

namespace DesignPatterns\Patterns\Strategy\Ducks;

use DesignPatterns\Patterns\Strategy\Ducks\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo 'Cuack, cuack, quack';
    }
}
