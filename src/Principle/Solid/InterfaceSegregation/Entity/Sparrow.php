<?php

declare(strict_types=1);

namespace App\Principle\Solid\InterfaceSegregation\Entity;

use App\Principle\Solid\InterfaceSegregation\Interfaces\BaseBird;

class Sparrow implements BaseBird
{
    public function fly(): void
    {
    }

    public function swim(): void
    {
    }

    public function sing(): void
    {
    }
}
