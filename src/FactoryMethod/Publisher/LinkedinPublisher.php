<?php

namespace Src\FactoryMethod\Publisher;

class LinkedinPublisher implements Publisher
{

    public function publish(Message $message)
    {
        echo sprintf("Linkedin publisher -> %s - %s - %s", $message->getMessage(), $message->getFile(), $message->getContent());
    }
}
