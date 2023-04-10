<?php

namespace Src\FactoryMethod\Publisher;

class Message
{
    public function __construct(private string $message, private string $file, private string $content)
    {

    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }


}
