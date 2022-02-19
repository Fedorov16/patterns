<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithNoBridge;

use App\Pattern\Structural\Bridge\Formats\Jpeg;
use App\Pattern\Structural\Bridge\Formats\Png;

class WithoutBridge
{
    public function run(): void
    {
        $jpeg = new Jpeg();
        $addShadowJpeg = new AddShadowJpeg($jpeg);
        $addShadowJpeg->run();

        $processJpeg = new ProcessJpeg($jpeg);
        $processJpeg->run();

        $png = new Png();

        $processJpeg = new ProcessPng($png);
        $processJpeg->run();

        $addShadowJpeg = new AddShadowPng($png);
        $addShadowJpeg->run();
    }
}
