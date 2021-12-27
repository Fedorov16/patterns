<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory;

use App\Pattern\Creational\AbstractFactory\CarFactory\Designer\DesignerInterface;
use App\Pattern\Creational\AbstractFactory\CarFactory\Designer\DesignerLada;
use App\Pattern\Creational\AbstractFactory\CarFactory\Rabotyaga\RabotyagaInterface;
use App\Pattern\Creational\AbstractFactory\CarFactory\Rabotyaga\RabotyagaLada;
use App\Pattern\Creational\AbstractFactory\CarFactory\Technic\TechnicInterface;
use App\Pattern\Creational\AbstractFactory\CarFactory\Technic\TechnicLada;

class LadaFactory implements CarFactoryInterface
{
    public function makePrototype(): DesignerInterface
    {
        return new DesignerLada();
    }

    public function makeConstruct(): TechnicInterface
    {
        return new TechnicLada();
    }

    public function makeCar(): RabotyagaInterface
    {
        return new RabotyagaLada();
    }
}