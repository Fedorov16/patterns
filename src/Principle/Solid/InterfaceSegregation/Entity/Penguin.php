<?php

declare(strict_types=1);

namespace App\Principle\Solid\InterfaceSegregation\Entity;

use App\Principle\Solid\InterfaceSegregation\Interfaces\BaseBird;

class Penguin implements BaseBird
{
    public function fly(): void
    {
        throw new \Exception("Penguin can't fly");
    }

    public function swim(): void
    {
    }

    public function sing(): void
    {
        throw new \Exception("Penguin can't fly");
    }
}
