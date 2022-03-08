<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\Formats;

class Jpeg implements ImageInterface
{
    private string $shadowColor = 'black';
    private int $size = 4000;

    public function getShadowColor(): string
    {
        return $this->shadowColor;
    }

    public function setShadowColor(string $shadowColor): self
    {
        $this->shadowColor = $shadowColor;

        return $this;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }
}
