<?php

namespace Src\TemplateMethod\Blog;

class TechnicalPost extends Post
{

    protected function draft(string $content)
    {
        return 'prepared content on technical';
    }

    protected function review()
    {
        return 'technical review:' . $this->preparedContent;
    }
}
