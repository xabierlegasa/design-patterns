<?php

namespace DesignPatterns\Tests\Patterns\State;

use DesignPatterns\Patterns\State\Gumball\GumballMachine;

class GumballTest extends \PHPUnit_Framework_TestCase
{
    function test_gumball_machine_works_fine()
    {
        $gumballMachine = new GumballMachine(5);
        $gumballMachine->insertQuarter();
        $gumballMachine->ejectQuarter();
        $gumballMachine->insertQuarter();
        $result = $gumballMachine->turnCrank();

        $this->assertTrue($this->isAnArrayOfOneOrTwoGumballs($result));
    }

    private function isAnArrayOfOneOrTwoGumballs($input)
    {
        if (is_array($input)) {
            if (count($input) == 1) {
                if ($this->isAGumball($input[0])) {
                    return true;
                }
            } else if (count($input) == 2){
                if ($this->isAGumball($input[0]) && $this->isAGumball($input[1])) {
                    return true;
                }
            }
        }
        return is_array($input);
    }

    private function isAGumball($object)
    {
        return is_a($object, 'Gumball');
    }
}