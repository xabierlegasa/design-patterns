<?php

class BeveragesTest extends \PHPUnit_Framework_TestCase
{
    function testDoubleMochaSoyLatteWithWhipCost()
    {
        $beverage = new HouseBlend();
        $beverage = new Mocha($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Soy($beverage);
        $beverage = new Latte($beverage);
        $beverage = new Whip($beverage);

        $cost = $beverage->cost();
        $this->assertEquals(1.64, $cost);
    }
}
