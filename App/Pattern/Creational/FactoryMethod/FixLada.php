<?php

declare(strict_types=1);

namespace App\Pattern\Creational\FactoryMethod;

class FixLada implements FixFactoryInterface
{
    public function fixCar(): void
    {
       dump('throw away your trash');
    }
}