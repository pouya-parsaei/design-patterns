<?php

namespace Src\Solid\DIP\Authentication;

class UserProvider implements UserProviderInterface
{

    public function __construct(private Connection $connection)
    {

    }

    public function findUser(string $username): bool
    {
        $user = $this->connection->query('select * from users where username = ?', ['username' => $username]);

        if (!$user) {
            throw new \RuntimeException('invalid credentials');
        }

        return true;
    }
}
