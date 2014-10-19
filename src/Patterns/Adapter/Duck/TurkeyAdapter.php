<?php

namespace DesignPatterns\Patterns\Adapter\Duck;

class TurkeyAdapter implements Duck
{
    /**
     * @var Turkey $turkey
     */
    private $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        return $this->turkey->gobble();
    }

    public function fly()
    {
        return $this->turkey->fly();
    }
}
