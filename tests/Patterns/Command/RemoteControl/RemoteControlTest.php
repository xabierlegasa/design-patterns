<?php

namespace DesignPatterns\Tests\Patterns\Command;

use DesignPatterns\Patterns\Command\RemoteControl\Light;
use DesignPatterns\Patterns\Command\RemoteControl\LightOnCommand;
use DesignPatterns\Patterns\Command\RemoteControl\SimpleRemoteControl;

class RemoteControlTest extends \PHPUnit_Framework_TestCase
{
    function test_turn_on_light_works()
    {
        $this->expectOutputString("Turn on the light");

        $light = new Light();
        $lightOnCommand = new LightOnCommand($light);

        $simpleRemoteControl = new SimpleRemoteControl();
        $simpleRemoteControl->setCommand($lightOnCommand);
        $simpleRemoteControl->buttonWasPressed();
    }
}
