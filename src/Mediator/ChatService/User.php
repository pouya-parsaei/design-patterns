<?php

namespace Src\Mediator\ChatService;

class User
{

    public function __construct(private int $id)
    {

    }

    public function getId(): int
    {
        return $this->id;
    }
}
