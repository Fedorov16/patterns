<?php

declare(strict_types=1);

namespace App\Principle\Solid\DependencyInversion;

class MobileService
{
    private Mobile $mobile;

    public function __construct(Mobile $mobile)
    {
        $this->mobile = $mobile;
    }

    public function makeACall(): void
    {
        $this->mobile->call();
    }
}
