<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithBridge;

use App\Pattern\Structural\Bridge\Formats\Jpeg;
use App\Pattern\Structural\Bridge\Formats\Png;

class WithBridge
{
    public function run(): void
    {
        $jpeg = new Jpeg();
        $realization = new JpegRealization($jpeg);

//        $png = new Png();
//        $realization = new PngRealization($png);

        $handlerAbstraction = new Handler($realization);
        $handlerAbstraction->run();

        $dimmerAbstraction = new Dimmer($realization);
        $dimmerAbstraction->run();
    }
}
