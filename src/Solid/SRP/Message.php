<?php

namespace Src\Solid\SRP;

class Message
{


    public function __construct(
        private string $subject,
        private string $body,
        private string $emailAddress
    )
    {
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }


}
