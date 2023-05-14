<?php

namespace Src\FlyWeight\Faker;

class UserProfile
{
    public function __construct(
        private string $gender,
        private int $age,
        private string $city
    )
    {

    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getCity(): string
    {
        return $this->city;
    }


}
