<?php

namespace DesignPatterns\Patterns\Composite\Waitress;

class Waitress
{
    /**
     * @var MenuComponent allMenus
     */
    private $allMenus;

    public function __construct(MenuComponent $menuComponent)
    {
        $this->allMenus = $menuComponent;
    }

    public function printMenu()
    {
        return $this->allMenus->printInfo();
    }
}
