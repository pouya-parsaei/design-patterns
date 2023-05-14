<?php

namespace Src\FlyWeight\Game;

class Player
{
    public function __construct(
        private string        $name,
        private PlayerProfile $profile
    )
    {

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getProfile(): PlayerProfile
    {
        return $this->profile;
    }
}
