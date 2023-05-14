<?php

namespace Src\FlyWeight\Game;

class PlayerProfile
{
    public function __construct(
        private int $level,
        private int $score,
        private \DateTimeImmutable $lastPlayedAt,
        private int $wins,
        private int $losses
    )
    {

    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getLastPlayedAt(): \DateTimeImmutable
    {
        return $this->lastPlayedAt;
    }

    public function getWins(): int
    {
        return $this->wins;
    }

    public function getLosses(): int
    {
        return $this->losses;
    }


}
