<?php

namespace Src\Adapter\Notification;

class TelegramNotifierAdapter implements Notifier
{

    public function __construct(private TelegramAPI $telegramApi, private string $chatId)
    {

    }

    public function send(string $message)
    {
        return $this->telegramApi->send($this->chatId, $message);
    }

}
