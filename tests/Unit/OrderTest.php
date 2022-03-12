<?php

declare(strict_types=1);

namespace Unit;

use App\Pattern\Structural\Composite\Box;
use App\Pattern\Structural\Composite\Order;
use App\Pattern\Structural\Composite\Product;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testOrderPrice(): void
    {
        $product1 = new Product();
        $product1->setPrice(53);

        $product2 = new Product();
        $product2->setPrice(125);

        $box = new Box();
        $box->setProducts([$product1, $product2]);

        $order = new Order();
        $order->setBoxes([$box]);

        $this->assertEquals($product1->getPrice() + $product2->getPrice(), $order->calculateSum());
    }
}
