<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\Formats;

interface ImageInterface
{
    public function getShadowColor(): string;
    public function setShadowColor(string $shadowColor);

    public function getSize(): int;
    public function setSize(int $size);
}
