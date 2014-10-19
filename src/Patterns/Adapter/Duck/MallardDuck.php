<?php

namespace DesignPatterns\Patterns\Adapter\Duck\Duck;

class MallardDuck extends Duck
{
    public function quack()
    {
        return 'quack';
    }

    public function fly()
    {
        return 'flying';
    }
}