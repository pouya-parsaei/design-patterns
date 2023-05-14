<?php

namespace Src\Adapter\Notification;

interface Notifier
{
    public function send(string $message);
}
