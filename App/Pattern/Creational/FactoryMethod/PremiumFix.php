<?php

declare(strict_types=1);

namespace App\Pattern\Creational\FactoryMethod;

class PremiumFix implements FixFactoryInterface
{
    public function fixCar(): void
    {
       dump('We are fixed Your Car');
    }
}