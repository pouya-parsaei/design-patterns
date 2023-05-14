<?php

namespace Src\FlyWeight\Faker;

class User
{
    public function __construct(
        private string $firstName,
        private string $lastName,
        private UserProfile $profile
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

    public function getProfile(): UserProfile
    {
        return $this->profile;
    }


}
