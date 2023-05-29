<?php

namespace Src\Mediator\EventDispatcher;

interface Observer
{
    public function update(string $event, object $emitter, $data = null);
}
