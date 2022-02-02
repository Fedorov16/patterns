<?php

declare(strict_types=1);

namespace Patterns;

use App\Pattern\Creational\SimpleFactory\Bmw;
use App\Pattern\Creational\SimpleFactory\CarInterface;
use App\Pattern\Creational\SimpleFactory\Lada;
use App\Pattern\Creational\StaticFactory\Factory\CarStaticFactory;
use PHPUnit\Framework\TestCase;

class CarStaticFactoryTest extends TestCase
{
    public const BMW = 'bmw';
    public const LADA = 'lada';

    public function testBmwReturnedInStaticFactory(): void
    {
        $instanceBmw = $this->getInstance(self::BMW);
        $this->assertInstanceOf(Bmw::class, $instanceBmw);
    }

    public function testLadaReturnedInStaticFactory(): void
    {
        $instanceBmw = $this->getInstance(self::LADA);
        $this->assertInstanceOf(Lada::class, $instanceBmw);
    }

    public function getInstance(string $name): CarInterface
    {
        return CarStaticFactory::build($name);
    }
}
