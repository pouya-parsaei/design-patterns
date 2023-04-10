<?php

namespace Src\FactoryMethod\Publisher;

class TwitterPublisher implements Publisher
{

    public function publish(Message $message)
    {
        echo sprintf("Twitter publisher -> %s - %s - %s", $message->getMessage(), $message->getFile(), $message->getContent());
    }
}
