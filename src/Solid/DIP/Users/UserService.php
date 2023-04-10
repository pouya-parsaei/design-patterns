<?php

namespace Src\Solid\DIP\Users;

class UserService
{
    public function __construct(private DispatcherInterface $dispatcher)
    {

    }

    public function register(array $params)
    {
        $this->dispatcher->dispatch('user_register', ['user_id' => $params['user_id']]);
    }
}
