<?php

declare(strict_types=1);

namespace App\Principle\Solid\DependencyInversion;

class Tablet
{
    public function call(): void
    {
        dump('tablet made a call');
    }
}
