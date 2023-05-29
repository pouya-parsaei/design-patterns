<?php

namespace Src\Mediator\EventDispatcher;

class UserService
{
    public function __construct(private EventDispatcher $eventDispatcher)
    {

    }

    public function deleteUser(int $userId)
    {
        $this->eventDispatcher->fire('user:deleted', $this, [
            'userId' => $userId
        ]);
    }
}
