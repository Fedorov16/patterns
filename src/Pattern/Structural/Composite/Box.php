<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Composite;

class Box implements ProductInterface
{
    private string $name = 'box';

    /**
     * @var array<Product>
     */
    private array $products;

    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

    public function calculateSum(): int
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->calculateSum();
        }
        dump(sprintf("%s: %s", $this->name, $sum));
        return $sum;
    }
}
