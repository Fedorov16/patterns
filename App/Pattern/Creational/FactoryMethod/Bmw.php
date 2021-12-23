<?php

declare(strict_types=1);

namespace App\Pattern\Creational\FactoryMethod;

class Bmw implements CarInterface
{
    public function getModel(): void
    {
    }

    public function getColor(): void
    {
    }

    public function getSpeed(): void
    {
    }

    public function getFactory(): FixFactoryInterface
    {
        return new PremiumFix();
    }
}