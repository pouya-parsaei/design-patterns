<?php

namespace Src\Command\Tasks;

class AddTaskCommand implements Command
{

    public function __construct(
        private string $title,
        private string $body,
        private AddTaskHandler $addTaskHandler
    )
    {

    }

    public function execute()
    {
        $this->addTaskHandler->execute($this);
    }
}
