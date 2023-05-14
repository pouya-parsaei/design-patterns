<?php

namespace Src\Adapter\Tasks\Importers;

use Src\Adapter\Tasks\Packages\Todoist\TodoistAPI;
use Src\Adapter\Tasks\Packages\Todoist\TodoistTask;
use Src\Adapter\Tasks\Task;
use Src\Adapter\Tasks\TaskImporter;
use Src\Adapter\Tasks\TaskStatus;

class TodoistImporter implements TaskImporter
{
    public function __construct(private TodoistAPI $todoistApi)
    {

    }

    public function import(): array
    {
        $tasks = $this->todoistApi->fetchTasks(0, 0);

        return collect($tasks)->map(function (TodoistTask $task) {
            return new Task($task->getName(), '', TaskStatus::Init);
        })->toArray();
    }
}
