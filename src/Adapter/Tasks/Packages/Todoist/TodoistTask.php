<?php

namespace Src\Adapter\Tasks\Packages\Todoist;

class TodoistTask
{
    public function __construct(private string $name, private string $createdAt)
    {

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }


}
