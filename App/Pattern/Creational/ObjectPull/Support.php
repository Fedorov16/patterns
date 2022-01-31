<?php

declare(strict_types=1);

namespace App\Pattern\Creational\ObjectPull;

class Support implements ObjectPullInterface
{
    private string $name;
    private int $supportNumber;

    public function __clone(){}

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSupportNumber(): int
    {
        return $this->supportNumber;
    }

    public function setSupportNumber(int $supportNumber): self
    {
        $this->supportNumber = $supportNumber;

        return $this;
    }
}
