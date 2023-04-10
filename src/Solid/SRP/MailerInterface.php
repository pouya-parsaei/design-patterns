<?php

namespace Src\Solid\SRP;

interface MailerInterface
{

    public function send(Message $message): void;
}
