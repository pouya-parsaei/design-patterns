<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\TemplateMethod\Blog\Client;

class PostController extends Controller
{
    public function __construct(private Client $postService)
    {

    }

    public function publish()
    {
        return $this->postService->publishPost();
    }
}
