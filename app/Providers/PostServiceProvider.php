<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\TemplateMethod\Blog\NoneTechnicalPost;
use Src\TemplateMethod\Blog\Post;
use Src\TemplateMethod\Blog\TechnicalPost;

class PostServiceProvider extends ServiceProvider
{
    public $bindings = [
        Post::class => TechnicalPost::class,
    ];
}
