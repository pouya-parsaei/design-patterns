<?php

namespace Src\State\CMS;

class Client
{
    public function publishPost()
    {
        $post = new Post('title test','content post');
        $post->moderate();
    }
}
