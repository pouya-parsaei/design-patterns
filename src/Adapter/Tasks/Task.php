<?php

namespace Src\Adapter\Tasks;

class Task
{
    public function __construct(private string $title, private string $description, private TaskStatus $status)
    {

    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return TaskStatus
     */
    public function getStatus(): TaskStatus
    {
        return $this->status;
    }


}
