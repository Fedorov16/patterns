<?php

declare(strict_types=1);

namespace App\Principle\Solid\Liskov;

class BirdCulc
{
    private Bird $bird;
    private int $wind;

    public function __construct(Bird $bird, $wind)
    {
        $this->bird = $bird;
        $this->wind = $wind;
    }

    public function culcCurentSpeed(): int
    {
        $flySpeed = $this->bird->fly() + $this->wind;
        dump('flySpeed = ' . $flySpeed);
        return $flySpeed;
    }
}