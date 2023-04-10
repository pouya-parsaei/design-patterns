<?php

namespace Src\FactoryMethod\Logger;

class LogMessage
{
    public function __construct(private string $content)
    {

    }

    public function getContent(): string
    {
        return $this->content;
    }
}
