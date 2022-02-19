<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithNoBridge;

class ProcessPng extends ImageAbstract
{
    private const PERCENT_OF_PROCESS = 50;

    public function run(): void
    {
        $this->processPngLogic();

        $this->doCommonLogic();
    }

    private function processPngLogic(): void
    {
        $newSize = (int)($this->image->getSize() - ($this->image->getSize() / 100) * self::PERCENT_OF_PROCESS);
        $this->image->setSize($newSize);
    }
}
