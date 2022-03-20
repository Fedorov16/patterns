<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Memento;

use JetBrains\PhpStorm\Pure;

class CareTaker
{
    /** @var Memento[] $mementos */
    private array $mementos;

    public function __construct(private Originator $originator) {}

    public function save(): void
    {
        $this->mementos[] = $this->originator->makeMemento();
    }

    public function backUp(): void
    {
        array_pop($this->mementos);
    }

    public function getMementos(): array
    {
        return $this->mementos;
    }

    public function showAllMementosAsArray(): array
    {
        $data = [];
        foreach ($this->mementos as $memento) {
            $state = $memento->getState();
            $data[] = sprintf("%s -> %s", $state['name'], $state['data']);
        }
        return $data;
    }
}
