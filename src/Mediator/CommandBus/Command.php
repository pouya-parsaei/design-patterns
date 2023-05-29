<?php

namespace Src\Mediator\CommandBus;

interface Command
{
    public function getId():int;
}
