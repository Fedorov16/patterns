<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory\Rabotyaga
;

class RabotyagaBmw implements RabotyagaInterface
{
    public function constructCar()
    {
        dump('the best job ever');
    }
}