<?php

namespace Src\Command\Tasks;

use Illuminate\Http\Request;

class TaskController
{
    public function add(Request $request)
    {
        $addTaskHandler = new AddTaskHandler();
        $addTaskCommand = new AddTaskCommand($request->title,$request->body,$addTaskHandler);
        $addTaskCommand->execute();
    }
}
