<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithNoBridge;

class ProcessJpeg extends ImageAbstract
{
    private const PERCENT_OF_PROCESS = 30;
    private const EXTRA_IMPROVE_PERCENT = 10;

    public function run(): void
    {
        $this->processJpegLogic();

        $this->doCommonLogic();
    }

    private function processJpegLogic(): void
    {
        $newSize = (int)($this->image->getSize() - ($this->image->getSize() / 100) * (self::PERCENT_OF_PROCESS + self::EXTRA_IMPROVE_PERCENT));
        $this->image->setSize($newSize);
    }
}
