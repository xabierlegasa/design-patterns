<?php

namespace DesignPatterns\Tests\Patterns\Adapter;

use DesignPatterns\Patterns\Command\Patterns\Adapter;

class TurkeyActsAsADuckTest extends \PHPUnit_Framework_TestCase
{
    function test_turkey_can_act_as_a_duck()
    {
        $turkey = new Turkey();
        $duckAdapter = new DuckAdapter($turkey);
        $this->assertEquals('gobble', $duckAdapter->cuack());
        $this->assertEquals('fly fly fly', $duckAdapter->fly());
        $this->assertTrue(true);
    }
}
