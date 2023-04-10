<?php

namespace Src\FactoryMethod\Publisher;

class InstagramPublisher implements Publisher
{

    public function publish(Message $message)
    {
        echo sprintf("Instagram publisher -> %s - %s - %s", $message->getMessage(), $message->getFile(), $message->getContent());
    }
}
