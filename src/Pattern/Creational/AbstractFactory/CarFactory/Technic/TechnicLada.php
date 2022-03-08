<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory\Technic;

class TechnicLada implements TechnicInterface
{
    public function prototypeIdea()
    {
        dump('I had no idea what had I done');
    }
}