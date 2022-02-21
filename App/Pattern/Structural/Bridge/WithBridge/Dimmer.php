<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithBridge;

class Dimmer extends ImageAbstract
{
    public function run()
    {
        $shadowColor = '#eaeaea';
        $this->realization->setShadowColor($shadowColor);
        $this->doCommonLogic();
    }
}
