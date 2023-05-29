<?php

namespace Src\Mediator\ChatService;

class Message
{

    public function __construct(
        private User   $sender,
        private User   $receiver,
        private string $body
    )
    {

    }

    public function getSender(): User
    {
        return $this->sender;
    }

    public function getReceiver(): User
    {
        return $this->receiver;
    }

    public function getBody(): string
    {
        return $this->body;
    }

}
