<?php

namespace Src\TemplateMethod\Blog;

abstract class Post
{
    protected string $preparedContent;

    public function publish(string $content)
    {
        $this->preparedContent = $this->draft($content);

        return $this->review();
    }

    abstract protected function draft(string $content);

    abstract protected function review();
}
