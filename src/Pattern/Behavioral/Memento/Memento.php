<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Memento;

class Memento
{
    public function __construct(
        private string $name,
        private string $string
    ) {}

    public function getState(): array
    {
        return [
            'name' => $this->name,
            'data' => $this->string
        ];
    }
}
