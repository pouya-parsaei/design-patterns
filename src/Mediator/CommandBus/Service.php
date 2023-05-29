<?php

namespace Src\Mediator\CommandBus;

class Service
{
    public function __construct(private CommandDispatcher $commandDispatcher)
    {

    }

    public function save()
    {
        $commandHandler = new Notifier();
        $command = new SaveCommand();
        $this->commandDispatcher->add($command, $commandHandler);
        $this->commandDispatcher->dispatch($command, $this, ['fileName' => 'test']);
    }
}
