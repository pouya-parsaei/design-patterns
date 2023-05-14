<?php

namespace Src\FlyWeight\Game;

class PlayerFactory
{
    private array $players;
    private array $playersProfiles;

    public function createPlayer(string $name, int $level, int $score, \DateTimeImmutable $lastPlayedAt, int $wins, int $losses): Player
    {
        $playerProfile = $this->createPlayerProfile($level, $score, $lastPlayedAt, $wins, $losses);
        $player = new Player($name, $playerProfile);
        $this->players[] = $player;

        return $player;
    }

    private function createPlayerProfile(int $level, int $score, \DateTimeImmutable $lastPlayedAt, int $wins, int $losses)
    {
        $key = $this->createKey(get_defined_vars());

        if (!isset($this->playersProfiles[$key])) {
            $this->playersProfiles[$key] = new PlayerProfile($level, $score, $lastPlayedAt, $wins, $losses);
        }

        return $this->playersProfiles[$key];
    }

    private function createKey(array $data)
    {
        ksort($data);

        return md5(implode('_', $data));
    }
}
