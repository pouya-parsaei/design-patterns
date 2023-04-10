<?php

namespace Src\FactoryMethod\Publisher;

class LinkedinPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): Publisher
    {
        return new LinkedinPublisher();
    }
}
