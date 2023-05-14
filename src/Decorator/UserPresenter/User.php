<?php

namespace Src\Decorator\UserPresenter;

use Carbon\Carbon;

class User
{
    public function __construct(
        private string $firstName, private string $lastName, private Carbon $registerDate, private string $email
    )
    {

    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getRegisterDate(): Carbon
    {
        return $this->registerDate;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

}
