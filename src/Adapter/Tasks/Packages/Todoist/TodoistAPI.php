<?php

namespace Src\Adapter\Tasks\Packages\Todoist;

class TodoistAPI
{
    public function __construct(private string $token)
    {

    }

    public function fetchTasks(int $category, int $count):array
    {

    }
}
