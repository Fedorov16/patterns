<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Strategy;

class GameStrategyHard implements GameStrategy
{
    private const LEVEL_EXTRA_BONUS = 5;
    private const CLEAR_VICTORY_BONUS = 3;

    public function calculate(int $gamerLevel, int $bossLevel, bool $isClearVictory = false): int
    {
        if ($isClearVictory) {
            return self::LEVEL_EXTRA_BONUS * $gamerLevel * $bossLevel * self::CLEAR_VICTORY_BONUS;
        }
        return self::LEVEL_EXTRA_BONUS * $gamerLevel * $bossLevel;
    }
}
