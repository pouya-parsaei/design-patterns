<?php

namespace Src\Adapter\Tasks\Importers;

use Src\Adapter\Tasks\Packages\MSTodo\MSTodoAPI;
use Src\Adapter\Tasks\Packages\MSTodo\MSTodoTask;
use Src\Adapter\Tasks\Task;
use Src\Adapter\Tasks\TaskImporter;
use Src\Adapter\Tasks\TaskStatus;

class MSTodoImporter implements TaskImporter
{

    public function __construct(private MSTodoAPI $msTodoApi)
    {

    }

    public function import(): array
    {
        $tasks = $this->msTodoApi->getTasks();

        return collect($tasks)->map(function (MSTodoTask $task) {
            return new Task($task->getTitle(), $task->getContent(), $task->getContent() === 'init' ? TaskStatus::Init : TaskStatus::Doing);
        })->toArray();
    }
}
