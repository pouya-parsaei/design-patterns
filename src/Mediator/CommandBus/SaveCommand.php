<?php

namespace Src\Mediator\CommandBus;

class SaveCommand implements Command
{

    public function getId(): int
    {
        return 1;
    }
}
