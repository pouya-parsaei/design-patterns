<?php

namespace Src\Adapter\Notification;

class TelegramAPI
{
    public function send(int $chatId, string $message)
    {
        return 'send telegram message with id: '.$chatId.'&message: '.$message;
    }
}
