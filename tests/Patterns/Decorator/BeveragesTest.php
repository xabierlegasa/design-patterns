<?php

class BeveragesTest extends \PHPUnit_Framework_TestCase
{
    function test_double_mocka_soy_latte_with_whip_cost_is_correct()
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
