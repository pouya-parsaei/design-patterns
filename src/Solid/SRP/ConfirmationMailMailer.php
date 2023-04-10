<?php

namespace Src\Solid\SRP;

class ConfirmationMailMailer
{

    public function __construct(
        private MailerInterface           $mailer,
        private ConfirmationMailFactory $confirmationMailFactory

    )
    {
    }

    public function sendTo(User $user)
    {
        $message = $this->createMessageFor($user);

        $this->sendMessage($message);
    }

    private function createMessageFor(User $user): Message
    {
      return $this->confirmationMailFactory->createMessageFor($user);
    }

    private function sendMessage(Message $message)
    {
        $this->mailer->send($message);
    }
}
