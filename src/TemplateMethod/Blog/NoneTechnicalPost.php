<?php

namespace Src\TemplateMethod\Blog;

class NoneTechnicalPost extends Post
{

    protected function draft(string $content)
    {
        return 'prepared content on non technical';
    }

    protected function review()
    {
        return 'None technical review:' . $this->preparedContent;
    }
}
