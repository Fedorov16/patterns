<?php

declare(strict_types=1);

namespace App\Command;

class Summator extends AbstractCommand
{
    public function execute(): int
    {
        echo $this->getParam('a') + $this->getParam('b') . "\n";
        return 0;
    }

    protected function checkParams(): void
    {
        $this->ensureParamExists('a');
        $this->ensureParamExists('b');
    }
}
