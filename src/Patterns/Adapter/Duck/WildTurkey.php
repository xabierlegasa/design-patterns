<?php

namespace DesignPatterns\Patterns\Adapter\Duck;

class WildTurkey implements Turkey
{
    public function gobble()
    {
        return 'gobble';
    }

    public function fly()
    {
        return 'fly';
    }
}