<?php

declare(strict_types=1);

namespace App\Pattern\Creational\StaticFactory\Factory;

use App\Pattern\Creational\SimpleFactory\Bmw;
use App\Pattern\Creational\SimpleFactory\CarInterface;
use App\Pattern\Creational\SimpleFactory\Ferrari;
use App\Pattern\Creational\SimpleFactory\Lada;

class CarStaticFactory
{
    public static function build(string $name): carInterface
    {
        switch ($name) {
            case 'lada':
                return new Lada();
            case 'bmw':
                return new Bmw();
            case 'ferrari':
                return (new Ferrari())->setColor('red');
            default:
                throw new \Exception('There is no Car with name ' . $name);
        }
    }
}