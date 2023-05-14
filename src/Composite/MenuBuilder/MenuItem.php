<?php

namespace Src\Composite\MenuBuilder;

class MenuItem implements MenuComponent
{

    public function __construct(private string $title, private string $url)
    {

    }

    public function build()
    {
        echo "<a href='$this->url'>$this->title</a>";
    }
}
