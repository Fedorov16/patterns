<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Composite;

class Composite
{
    public function run(): int
    {
        $order = $this->getOrder();
        dump($order);
        return $order->calculateSum();
    }

    private function getOrder(): Order
    {
        $boxes = $this->getBoxes();

        $order = new Order();
        $order->setBoxes($boxes);

        return $order;
    }

    private function getBoxes(): array
    {
        $countOfBoxes = random_int(1, 3);
        $boxes = [];
        for ($i = 0; $i < $countOfBoxes; $i++) {
            $isNotBox = random_int(0, 4);
            if (!$isNotBox) {
                $boxes[] = $this->getBoxes();
            }
            $products = $this->getProducts();
            $box = new Box();
            $box->setProducts($products);
            $boxes[] = $box;
        }
        return $boxes;
    }

    private function getProducts(): array
    {
        $countOfProducts = random_int(1, 5);
        $products = [];
        for ($i = 0; $i < $countOfProducts; $i++) {
            $price = random_int(10, 100);
            $product = new Product();
            $product->setPrice($price);
            $products[] = $product;
        }
        return $products;
    }
}
