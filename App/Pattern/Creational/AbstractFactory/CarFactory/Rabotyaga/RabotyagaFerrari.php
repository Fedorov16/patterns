<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory\Rabotyaga;


class RabotyagaFerrari implements RabotyagaInterface
{
    public function constructCar()
    {
        dump('There is one more red car');
    }
}