<?php

namespace Src\Adapter\Tasks\Packages\MSTodo;

class MSTodoTask
{
    public function __construct(private string $title, private string $content, private string $status)
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
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }


}
