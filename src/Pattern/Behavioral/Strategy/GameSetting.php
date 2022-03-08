<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Strategy;

class GameSetting
{
    private GameStrategy $gameStrategy;

    public function __construct(GameStrategy $gameStrategy)
    {
        $this->gameStrategy = $gameStrategy;
    }

    public function scoreFight(): int
    {
        $randomGamerLevel = random_int(0, 50);
        $randomBossLevel = random_int(0, 50);
        $isClearFight = (bool)random_int(0, 1);
        dump(sprintf('gamer: %d boss: %d clearFight: %s', $randomGamerLevel, $randomBossLevel, $isClearFight));
        return $this->gameStrategy->calculate($randomGamerLevel, $randomBossLevel, $isClearFight);
    }
}
