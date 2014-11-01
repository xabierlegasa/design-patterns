<?php

namespace DesignPatterns\Patterns\Composite\Waitress;

class UnsupportedOperationException extends \Exception
{
    public function __construct()
    {
        parent::__construct("Unsupported operation");
    }
}
