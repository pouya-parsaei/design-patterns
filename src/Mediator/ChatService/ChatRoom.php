<?php

namespace Src\Mediator\ChatService;

class ChatRoom
{

    public function __construct(
        private Emitter $emitter,
        private array   $users
    )
    {

    }

    public function connect(User $user): void
    {
        $this->users[$user->getId()] = $user;
    }

    public function disconnect(User $user): void
    {
        unset($this->users[$user->getId()]);
    }

    public function send(Message $message): void
    {
        if (!isset($this->users[$message->getReceiver()->getId()])) {
            return;
        }

        $user = $this->users[$message->getReceiver()->getId()];

        $this->emitter->emit($user, $message);
    }
}
