<?php

namespace DesignPatterns\Patterns\Composite\Waitress;

class Menu extends MenuComponent
{
    private $name;
    private $description;
    /**
     * @var array
     */
    private $menuComponents = array();

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent)
    {
        $this->menuComponents[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent)
    {
        if (in_array($menuComponent, $this->menuComponents))
        {
            unset($this->menuComponents[array_search($menuComponent,$this->menuComponents)]);
        }
    }

    public function getChild($i)
    {
        return $this->menuComponents[$i];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function printInfo()
    {
        $info = "\nMenu: " . $this->name . ':' . $this->description;

        foreach ($this->menuComponents as $menuComponent) {
            $info .= $menuComponent->printInfo();
        }

        return $info;
    }
}
