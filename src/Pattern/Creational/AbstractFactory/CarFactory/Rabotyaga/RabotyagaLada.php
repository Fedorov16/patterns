<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory\Rabotyaga;

class RabotyagaLada implements RabotyagaInterface
{
    public function constructCar()
    {
        dump('I tak soidet');
    }
}