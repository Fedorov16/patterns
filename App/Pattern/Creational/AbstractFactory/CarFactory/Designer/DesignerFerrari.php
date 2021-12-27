<?php

declare(strict_types=1);

namespace App\Pattern\Creational\AbstractFactory\CarFactory\Designer;

class DesignerFerrari implements DesignerInterface
{
    public function newIdea()
    {
        dump('Hey, I found idea for new Ferrari car');
    }
}