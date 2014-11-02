<?php

namespace DesignPatterns\Patterns\State\Gumball;

interface State
{
    public function insertQuarter();
    public function ejectQuarter();
    public function turnCrank();
    public function dispense();
}