<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory\Technic;

class TechnicFerrari implements TechnicInterface
{
    public function prototypeIdea()
    {
        dump('Hey, look at ferrari prototype');
    }
}