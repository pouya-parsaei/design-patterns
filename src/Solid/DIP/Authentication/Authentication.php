<?php

namespace Src\Solid\DIP\Authentication;

class Authentication
{
    public function __construct(private UserProviderInterface $userProvider)
    {

    }

    public function check(string $username, string $password): bool
    {
        $user = $this->userProvider->findUser($username);

        if (!$user) {
            throw new \RuntimeException('invalid credentials');
        }

        return true;
    }
}
