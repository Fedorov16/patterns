<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory;

use App\Pattern\Creational\AbstractFactory\CarFactory\Designer\DesignerBmw;
use App\Pattern\Creational\AbstractFactory\CarFactory\Designer\DesignerInterface;
use App\Pattern\Creational\AbstractFactory\CarFactory\Rabotyaga\RabotyagaBmw;
use App\Pattern\Creational\AbstractFactory\CarFactory\Rabotyaga\RabotyagaInterface;
use App\Pattern\Creational\AbstractFactory\CarFactory\Technic\TechnicBmw;
use App\Pattern\Creational\AbstractFactory\CarFactory\Technic\TechnicInterface;

class BmwFactory implements CarFactoryInterface
{
    public function makePrototype(): DesignerInterface
    {
        return new DesignerBmw();
    }

    public function makeConstruct(): TechnicInterface
    {
        return new TechnicBmw();
    }

    public function makeCar(): RabotyagaInterface
    {
        return new RabotyagaBmw();
    }
}