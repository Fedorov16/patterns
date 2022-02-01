<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Strategy;

class StrategyFactory
{
    public static function build(string $levelDifficult): GameStrategy
    {
        return match ($levelDifficult) {
            'easy' => new GameStrategyEasy(),
            'medium' => new GameStrategyMedium(),
            'hard' => new GameStrategyHard(),
        };
    }
}
