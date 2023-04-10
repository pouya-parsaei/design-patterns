<?php

namespace Src\Solid\DIP\Users;

interface DispatcherInterface
{
    public function dispatch(string $event,array $payload):void;
}
