<?php

namespace Src\Adapter\Notification;

class NotificationService
{
//    public function __construct(private Notifier $notifier)
//    {
//
//    }

    public function notify(Notifier $notifier)
    {
        return $notifier->send('test');
    }
}
