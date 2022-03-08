<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithBridge;

use App\Pattern\Structural\Bridge\Formats\Jpeg;

class JpegRealization implements RealizationInterface
{
    private const PERCENT_OF_PROCESS = 30;
    private const EXTRA_IMPROVE_PERCENT = 10;

    public function __construct(
        private readonly Jpeg $jpeg,
    ) {}

    public function setSize(): void
    {
        $newSize = (int)($this->jpeg->getSize() - ($this->jpeg->getSize() / 100) * (self::PERCENT_OF_PROCESS + self::EXTRA_IMPROVE_PERCENT));
        $this->jpeg->setSize($newSize);
    }

    public function setShadowColor(string $shadowColor): void
    {
        $this->jpeg->setShadowColor($shadowColor);
    }


    public function getShadowColor(): string
    {
        return $this->jpeg->getShadowColor();
    }

    public function getSize(): int
    {
        return $this->jpeg->getSize();
    }
}
