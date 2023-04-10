<?php

namespace Src\Solid\ISP;

interface Notifier
{
    public function sendSms();

    public function sendEmail();

    public function sendWebSocket();
}
