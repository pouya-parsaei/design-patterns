<?php

namespace Src\Mediator\CommandBus;

class Notifier implements CommandHandler
{

    public function handle(Command $command, object $emitter, $data = null)
    {
        echo "command:" . $command->getId() . 'executed';
    }
}
