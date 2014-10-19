<?php

namespace DesignPatterns\Tests\Patterns\Adapter;

use DesignPatterns\Patterns\Adapter\Duck\TurkeyAdapter;
use DesignPatterns\Patterns\Adapter\Duck\WildTurkey;

class TurkeyActsAsADuckTest extends \PHPUnit_Framework_TestCase
{
    function test_turkey_can_act_as_a_duck()
    {
        $wildTurkey = new WildTurkey();
        $turkeyAdapter = new TurkeyAdapter($wildTurkey);
        $this->assertEquals('gobble', $turkeyAdapter->quack());
        $this->assertEquals('fly', $turkeyAdapter->fly());
        $this->assertTrue(true);
    }
}
