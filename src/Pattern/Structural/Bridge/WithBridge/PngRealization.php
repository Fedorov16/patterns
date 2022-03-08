<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithBridge;

use App\Pattern\Structural\Bridge\Formats\Png;

class PngRealization implements RealizationInterface
{
    private const PERCENT_OF_PROCESS = 50;

    public function __construct(
        private readonly Png $png,
    ) {}

    public function setSize(): void
    {
        $newSize = (int)($this->png->getSize() - ($this->png->getSize() / 100) * self::PERCENT_OF_PROCESS);
        $this->png->setSize($newSize);
    }

    public function setShadowColor(string $shadowColor): void
    {
        $this->png->setShadowColor($shadowColor);
    }

    public function getShadowColor(): string
    {
        return $this->png->getShadowColor();
    }

    public function getSize(): int
    {
        return $this->png->getSize();
    }
}
