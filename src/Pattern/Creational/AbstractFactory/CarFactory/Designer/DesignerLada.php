<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory\Designer;

class DesignerLada implements DesignerInterface
{
    public function newIdea()
    {
        dump('Hey, they didn\'t pay me for my job');
    }
}