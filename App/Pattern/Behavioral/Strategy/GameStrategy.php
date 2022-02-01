<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Strategy;

interface GameStrategy
{
    public function calculate(int $gamerLevel, int $bossLevel, bool $isClearVictory): int;
}
