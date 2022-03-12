<?php

declare(strict_types=1);

namespace Unit;

use App\Pattern\Structural\Composite\Composite;
use PHPUnit\Framework\TestCase;
use ReflectionMethod;

class CompositeTest extends TestCase
{
    public function testGetProductsMethod(): void
    {
        $composite = new Composite();
        $reflection = new ReflectionMethod($composite, "getProducts");
        $getProductsMethod = $reflection->invoke($composite);
        $this->assertIsArray($getProductsMethod);
    }

    public function testRunCompositeTest(): void
    {
        $composite = new Composite();
        $this->assertIsInt($composite->run());
    }
}
