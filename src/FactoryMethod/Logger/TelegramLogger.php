<?php

namespace Src\FactoryMethod\Logger;

class TelegramLogger implements Logger
{
    public function __construct(TelegramAPI $telegramAPI)
    {

    }

    public function log(LogMessage $message)
    {
    }
}
