<?php

namespace Src\Mediator\CommandBus;

interface CommandHandler
{
    public function handle(Command $command, object $emitter, $data = null);
}
