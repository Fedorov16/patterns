<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithNoBridge;

use App\Pattern\Structural\Bridge\WithBridge\Formats\Png;

class AddShadowPng extends ImageAbstract
{
    public function __construct(
        private readonly Png $png,
    ) {}

    protected function prepare(): void
    {
        $this->png->setName('PngWithShadow');
        dump($this->png->getName());
    }
}
