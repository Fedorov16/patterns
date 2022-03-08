<?php

declare(strict_types=1);

namespace App\Pattern\Creational\ObjectPull;

class Customer implements ObjectPullInterface
{
    private string $name = 'default1';
    private int $phone;

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

    public function getPhone(): int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
