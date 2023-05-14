<?php

namespace Src\Composite\Concept;

class Client
{
    public function __construct(private Component $component)
    {

    }
}
