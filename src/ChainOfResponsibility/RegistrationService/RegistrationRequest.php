<?php

namespace Src\ChainOfResponsibility\RegistrationService;

final class RegistrationRequest
{
    public function __construct(
        private string $email,
        private string $password,
        private string $referralCode
    )
    {

    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getReferralCode(): string
    {
        return $this->referralCode;
    }


}
