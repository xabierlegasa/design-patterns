<?php

namespace DesignPatterns\Tests\Patterns\Composite\Waitress;

use DesignPatterns\Patterns\Composite\Waitress\Menu;
use DesignPatterns\Patterns\Composite\Waitress\MenuItem;
use DesignPatterns\Patterns\Composite\Waitress\Waitress;

class WaitressTest extends \PHPUnit_Framework_TestCase
{
    public function test_menu_description_is_printed_correctly()
    {
        $menu = new Menu('Veggy menu', 'Delicius 3 dishes menu 100% vegetarian');
        $waitress = new Waitress($menu);

        $expected = "\nMenu: Veggy menu:Delicius 3 dishes menu 100% vegetarian";
        $this->assertEquals($expected, $waitress->printMenu());
    }

    public function test_a_menu_with_a_menuItem_is_printed_correctly()
    {
        $menu = new Menu('Veggy menu', 'Delicius 3 dishes menu 100% vegetarian');
        $menu->add(new MenuItem('Tofu', 'Tofu with tomate sauce', 4.5));
        $waitress = new Waitress($menu);

        $expected = "\nMenu: Veggy menu:Delicius 3 dishes menu 100% vegetarian\nTofu (4.5):Tofu with tomate sauce";
        $this->assertEquals($expected, $waitress->printMenu());
    }


    public function test_a_menu_with_multiple_composites_is_printed_correctly()
    {
        $menu = new Menu('Veggy menu', 'Delicius 3 dishes menu 100% vegetarian');
        $menu->add(new MenuItem('Tofu', 'Tofu with tomate sauce', 4.5));
        $dessertMenu = new Menu('Dessert tasting', 'Mini desserts');

        $dessertMenu->add(new MenuItem('Carrot Cake', 'Organic carrots cake', 2.25));
        $dessertMenu->add(new MenuItem('Chocolate Mousse', 'Someting sweet!', 0.80));
        $menu->add($dessertMenu);

        $waitress = new Waitress($menu);
        $expected = "\nMenu: Veggy menu:Delicius 3 dishes menu 100% vegetarian\nTofu (4.5):Tofu with tomate sauce\nMenu: Dessert tasting:Mini desserts\nCarrot Cake (2.25):Organic carrots cake\nChocolate Mousse (0.8):Someting sweet!";
        $this->assertEquals($expected, $waitress->printMenu());
    }
}
