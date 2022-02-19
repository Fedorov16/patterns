<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithNoBridge;

class AddShadowPng extends ImageAbstract
{
    public function run(): void
    {
        $shadowColor = '#eaeaea';
        $this->shadowPngLogic($shadowColor);

        $this->doCommonLogic();
    }

    private function shadowPngLogic(string $shadowColor): void
    {
        //При добавлении теней для Png имеется много собственной логики
        $this->image->setShadowColor($shadowColor);
    }
}
