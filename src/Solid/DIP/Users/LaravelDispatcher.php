<?php

namespace Src\Solid\DIP\Users;

use Illuminate\Contracts\Events\Dispatcher;

class LaravelDispatcher implements DispatcherInterface
{

    public function __construct(private Dispatcher $dispatcher)
    {

    }

    public function dispatch(string $event, array $payload): void
    {
        $this->dispatcher->dispatch($event, $payload);
    }
}
