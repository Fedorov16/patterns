<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory;

use App\Pattern\Creational\AbstractFactory\CarFactory\BmwFactory;
use App\Pattern\Creational\AbstractFactory\CarFactory\CarFactoryInterface;
use App\Pattern\Creational\AbstractFactory\CarFactory\FerrariFactory;
use App\Pattern\Creational\AbstractFactory\CarFactory\LadaFactory;

class AbstractCarFactory
{
    public static function build(string $name): CarFactoryInterface
    {
        return match ($name) {
            'lada' => new LadaFactory(),
            'bmw' => new BmwFactory(),
            'ferrari' => new FerrariFactory(),
            default => throw new \Exception('There is no Car with name ' . $name),
        };
    }
}