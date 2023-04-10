<?php

namespace Src\Solid\DIP\Authentication;

class RestAPIUserProvider implements UserProviderInterface
{

    public function findUser(string $username): bool
    {
        return false;
    }
}
