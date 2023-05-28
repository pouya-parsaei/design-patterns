<?php

namespace Src\Command\FileManager;

use Illuminate\Bus\Dispatcher;

class FileService
{
    private FileCommand $command;

    public function __construct(private Dispatcher $commandBus)
    {

    }
    public function setCommand(FileCommand $command)
    {
        $this->command = $command;
    }

    public function save()
    {
        $this->commandBus->dispatch($this->command);
    }
}
