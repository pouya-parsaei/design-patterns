<?php

namespace Src\Solid\DIP\Authentication;

interface UserProviderInterface
{
    public function findUser(string $username): bool;
}
