<?php

namespace DesignPatterns\Tests\Patterns\Strategy\Ducks;

use DesignPatterns\Patterns\Strategy\Ducks\MallardDuck;

class GumballTest extends \PHPUnit_Framework_TestCase
{
    public function test_that_mallar_duck_can_fly_high()
    {
        $this->expectOutputString('Flyign with wings really high');
        $mallarDuck = new MallardDuck();
        $mallarDuck->performFly();
    }

    public function test_that_mallar_duck_can_quack()
    {
        $this->expectOutputString('Cuack, cuack, quack');

        $mallarDuck = new MallardDuck();
        $mallarDuck->performQuack();
    }
}
