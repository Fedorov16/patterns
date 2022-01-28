<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory\Technic;

class TechnicBmw implements TechnicInterface
{
    public function prototypeIdea()
    {
        dump('Hey, look at Bmw prototype');
    }
}