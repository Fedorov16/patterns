<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory;

use App\Pattern\Creational\AbstractFactory\CarFactory\Designer\DesignerFerrari;
use App\Pattern\Creational\AbstractFactory\CarFactory\Designer\DesignerInterface;
use App\Pattern\Creational\AbstractFactory\CarFactory\Rabotyaga\RabotyagaFerrari;
use App\Pattern\Creational\AbstractFactory\CarFactory\Rabotyaga\RabotyagaInterface;
use App\Pattern\Creational\AbstractFactory\CarFactory\Technic\TechnicFerrari;
use App\Pattern\Creational\AbstractFactory\CarFactory\Technic\TechnicInterface;

class FerrariFactory implements CarFactoryInterface
{
    public function makePrototype(): DesignerInterface
    {
        return new DesignerFerrari();
    }

    public function makeConstruct(): TechnicInterface
    {
        return new TechnicFerrari();
    }

    public function makeCar(): RabotyagaInterface
    {
        return new RabotyagaFerrari();
    }
}