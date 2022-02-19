<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithNoBridge;

class AddShadowJpeg extends ImageAbstract
{
    public function run(): void
    {
        $shadowColor = '#eaeaea';
        $this->shadowJpegLogic($shadowColor);

        $this->doCommonLogic();
    }

    private function shadowJpegLogic(string $shadowColor): void
    {
        //При добавлении теней для Jpeg имеется много собственной логики
        $this->image->setShadowColor($shadowColor);
    }
}
