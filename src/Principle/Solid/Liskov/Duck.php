<?php

declare(strict_types=1);

namespace App\Principle\Solid\Liskov;

class Duck extends Bird
{
    private int $flySpeed = 10;
    private int $swimSpeed = 6;

    public function fly(): int
    {
        return $this->flySpeed;
    }

    public function swim(): int
    {
        return $this->swimSpeed;
    }
}
