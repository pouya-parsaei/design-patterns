<?php

namespace Src\FactoryMethod\Logger;

abstract class MessageLogger
{
    public function log(LogMessage $message)
    {
        $logger = $this->createLogger();

        $logger->log($message);
    }

    abstract protected function createLogger(): Logger;
}
