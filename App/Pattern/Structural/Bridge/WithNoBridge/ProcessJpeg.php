<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithNoBridge;

use App\Pattern\Structural\Bridge\WithBridge\Formats\Jpeg;

class ProcessJpeg extends ImageAbstract
{
    public function __construct(
        private readonly Jpeg $jpeg,
    ) {}

    protected function prepare(): void
    {
        $this->jpeg->setName('ProcessJpeg');
        dump($this->jpeg->getName());
    }
}
