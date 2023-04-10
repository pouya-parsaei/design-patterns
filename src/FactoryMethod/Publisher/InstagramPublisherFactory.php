<?php

namespace Src\FactoryMethod\Publisher;

class InstagramPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): Publisher
    {
        return new InstagramPublisher();
    }
}
