<?php

namespace DesignPatterns\Patterns\Command\RemoteControl;

use DesignPatterns\Patterns\Command\RemoteControl\Command;

class SimpleRemoteControl
{
    private $command;

    public function __construct()
    {

    }

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function buttonWasPressed()
    {
        return $this->command->execute();
    }
}