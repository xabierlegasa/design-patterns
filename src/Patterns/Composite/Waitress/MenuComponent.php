<?php

namespace DesignPatterns\Patterns\Composite\Waitress;

abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent)
    {
        throw new UnsupportedOperationException();
    }

    public function remove(MenuComponent $menuComponent)
    {
        throw new UnsupportedOperationException();
    }

    public function getChild($i)
    {
        throw new UnsupportedOperationException();
    }

    public function getName()
    {
        throw new UnsupportedOperationException();
    }

    public function getDescription()
    {
        throw new UnsupportedOperationException();
    }

    public function getPrice()
    {
        throw new UnsupportedOperationException();
    }

    public function printInfo()
    {
        throw new UnsupportedOperationException();
    }

}