<?php

namespace Src\FactoryMethod\Logger;

class SlackLoggerFactory extends MessageLogger
{

    protected function createLogger(): Logger
    {
        return new SlackLogger();
    }
}
