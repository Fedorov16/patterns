<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Composite;

class Product implements ProductInterface
{
    private string $name = 'product';
    private int $price;

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function calculateSum(): int
    {
        dump(sprintf("%s: %s", $this->name, $this->getPrice()));
        return $this->getPrice();
    }
}
