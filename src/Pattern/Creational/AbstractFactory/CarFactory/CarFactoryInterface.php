<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory;

use App\Pattern\Creational\AbstractFactory\CarFactory\Designer\DesignerInterface;
use App\Pattern\Creational\AbstractFactory\CarFactory\Rabotyaga\RabotyagaInterface;
use App\Pattern\Creational\AbstractFactory\CarFactory\Technic\TechnicInterface;

interface CarFactoryInterface
{
    public function makePrototype(): DesignerInterface;
    public function makeConstruct(): TechnicInterface;
    public function makeCar(): RabotyagaInterface;
}