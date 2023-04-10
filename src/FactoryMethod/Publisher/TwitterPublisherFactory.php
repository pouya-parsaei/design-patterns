<?php

namespace Src\FactoryMethod\Publisher;

class TwitterPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): Publisher
    {
        return new TwitterPublisher();
    }
}
