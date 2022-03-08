<?php

declare(strict_types=1);

namespace App\Pattern\Creational\FactoryMethod\Factory;

use App\Pattern\Creational\FactoryMethod\Ferrari;
use App\Pattern\Creational\FactoryMethod\Bmw;
use App\Pattern\Creational\FactoryMethod\FixFactoryInterface;
use App\Pattern\Creational\FactoryMethod\Lada;

class CarStaticFactory2
{
    public static function build(string $name): FixFactoryInterface
    {
        return match ($name) {
           'lada' => (new Lada())->getFactory(),
            'bmw' => (new Bmw())->getFactory(),
            'ferrari' => (new Ferrari())->getFactory(),
            default => throw new \Exception('There is no Car with name ' . $name),
        };
    }
}
