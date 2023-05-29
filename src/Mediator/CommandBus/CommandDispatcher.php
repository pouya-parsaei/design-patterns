<?php

namespace Src\Mediator\CommandBus;

class CommandDispatcher
{
    public function __construct(private array $commandHandlers)
    {

    }

    public function add(Command $command, CommandHandler $commandHandler): void
    {
        $this->commandHandlers[$command->getId()] = $commandHandler;
    }

    public function remove(Command $command): void
    {
        unset($this->commandHandlers[$command->getId()]);
    }

    public function dispatch(Command $command, object $emitter, $data = null): void
    {
        $commandHandler = $this->commandHandlers[$command->getId()];

        $commandHandler->handle($command, $emitter, $data);
    }
}
