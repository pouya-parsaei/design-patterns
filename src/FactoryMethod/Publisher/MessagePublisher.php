<?php

namespace Src\FactoryMethod\Publisher;

abstract class MessagePublisher
{

    public function publish(Message $message)
    {
        $publisher = $this->createPublisher();

        $publisher->publish($message);
    }

    abstract protected function createPublisher(): Publisher;

}
