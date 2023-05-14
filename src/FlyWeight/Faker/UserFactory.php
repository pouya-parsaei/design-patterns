<?php

namespace Src\FlyWeight\Faker;

class UserFactory
{
    private array $userProfiles;
    private array $users;

    public function createUser(
        string $firstName,
        string $lastName,
        string $gender,
        int    $age,
        string $city
    ): User
    {
        $userProfile = $this->createUserProfile($gender, $age, $city);
        $user = new User($firstName, $lastName, $userProfile);
        $this->users[] = $user;

        return $user;
    }

    private function createUserProfile(string $gender, int $age, string $city): UserProfile
    {
        $key = $this->createKey(get_defined_vars());

        if (!isset($this->userProfiles[$key])) {
            $this->userProfiles[$key] = new UserProfile($gender, $age, $city);
        }

        return $this->userProfiles[$key];
    }

    private function createKey(array $data): string
    {
        ksort($data);

        return md5(implode('_', $data));
    }
}
