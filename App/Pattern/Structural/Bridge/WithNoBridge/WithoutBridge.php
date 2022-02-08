<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithNoBridge;

class WithoutBridge
{
    public function __construct(
        private readonly ImageAbstract $imageAbstract
    ) {}

    public function run(): void
    {
        $this->imageAbstract->run();
    }
}
