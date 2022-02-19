<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithBridge;

interface RealizationInterface
{
    public function setShadowColor(string $shadowColor): void;
    public function setSize(): void;

    public function getShadowColor(): string;
    public function getSize(): int;
}
