<?php

declare(strict_types=1);

namespace App\Pattern\Creational\SimpleFactory;

class Ferrari implements CarInterface
{
    private string $color;
    public function getModel(): void
    {
    }

    public function getColor(): void
    {
    }

    public function getSpeed(): void
    {
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }
}