<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Memento;

class Originator
{
    public function __construct(
        private string $name,
        private string $string
    ) {}

    public function setStringData(string $name, string $string): void
    {
        $this->name = $name;
        $this->string = $string;
    }

    public function makeMemento(): Memento
    {
        return new Memento($this->name, $this->string);
    }
}
