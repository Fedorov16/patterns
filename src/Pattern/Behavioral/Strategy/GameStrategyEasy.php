<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Strategy;

class GameStrategyEasy implements GameStrategy
{
    private const LEVEL_EXTRA_BONUS = 1;

    public function calculate(int $gamerLevel, int $bossLevel, bool $isClearVictory = false): int
    {
        return self::LEVEL_EXTRA_BONUS * $gamerLevel * $bossLevel;
    }
}
