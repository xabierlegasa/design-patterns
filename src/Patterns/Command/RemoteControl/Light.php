<?php

namespace DesignPatterns\Patterns\Command\RemoteControl;

class Light
{
    public function on()
    {
        echo 'Turn on the light';
    }

    public function off()
    {
        echo 'Turn off the light';
    }
}
