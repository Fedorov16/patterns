<?php

declare(strict_types=1);

namespace App\Pattern\Creational\SimpleFactory\Factory;

use App\Pattern\Creational\SimpleFactory\Bmw;
use App\Pattern\Creational\SimpleFactory\CarInterface;
use App\Pattern\Creational\SimpleFactory\Ferrari;
use App\Pattern\Creational\SimpleFactory\Lada;

class CarFactory
{
    public function build(string $name): carInterface
    {
        return match ($name) {
            'lada' => new Lada(),
            'bmw' => new Bmw(),
            'ferrari' => (new Ferrari())->setColor('red'),
            default => throw new \Exception('There is no Car with name ' . $name),
        };
    }
}
