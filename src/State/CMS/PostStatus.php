<?php

namespace Src\State\CMS;

abstract class PostStatus
{
    protected Post $post;

    public function setPost(Post $post)
    {
        $this->post = $post;
    }

    abstract public function draft();
    abstract public function moderation();
    abstract public function published();
}
