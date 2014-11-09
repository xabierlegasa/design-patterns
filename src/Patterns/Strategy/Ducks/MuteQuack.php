<?php

namespace DesignPatterns\Patterns\Strategy\Ducks;

use DesignPatterns\Patterns\Strategy\Ducks\QuackBehavior;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo '...';
    }
}
