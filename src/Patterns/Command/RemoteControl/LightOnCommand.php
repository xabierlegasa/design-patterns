<?php

namespace DesignPatterns\Patterns\Command\RemoteControl;

use DesignPatterns\Patterns\Command\RemoteControl\Command;

class LightOnCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }
}
