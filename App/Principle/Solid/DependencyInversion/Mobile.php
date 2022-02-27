<?php

declare(strict_types=1);

namespace App\Principle\Solid\DependencyInversion;

class Mobile
{
    public function call(): void
    {
        dump('mobile made a call');
    }
}
