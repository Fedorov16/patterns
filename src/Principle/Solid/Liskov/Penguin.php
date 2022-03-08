<?php

declare(strict_types=1);

namespace App\Principle\Solid\Liskov;

class Penguin extends Bird
{
    private int $swimSpeed = 14;

    public function fly(): int
    {
        throw new \Exception("Penguin can't fly");
    }

    public function swim(): int
    {
        return $this->swimSpeed;
    }
}
