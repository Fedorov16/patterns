<?php

declare(strict_types=1);

namespace App\Principle\Solid\OpenClosed\Entity;

class Product
{
    private string $id;
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
