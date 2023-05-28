<?php

namespace Src\TemplateMethod\Blog;

class Client
{
    public function __construct(private Post $post)
    {

    }

    public function publishPost()
    {
        return $this->post->publish('test');
    }
}
