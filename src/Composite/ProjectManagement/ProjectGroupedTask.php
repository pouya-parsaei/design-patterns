<?php

namespace Src\Composite\ProjectManagement;

class ProjectGroupedTask implements ProjectComponent
{

    private array $tasks = [];

    public function add(ProjectTask $projectTask)
    {
        $this->tasks[] = $projectTask;
    }

    public function done()
    {
        foreach ($this->tasks as $task) {
            $task->done();
        }
    }

    public function duplicate()
    {
        // TODO: Implement duplicate() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function move()
    {
        // TODO: Implement move() method.
    }
}
