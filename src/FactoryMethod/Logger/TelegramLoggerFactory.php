<?php

namespace Src\FactoryMethod\Logger;

class TelegramLoggerFactory extends MessageLogger
{

    protected function createLogger(): Logger
    {
        return new TelegramLogger(new TelegramAPI());
    }
}
