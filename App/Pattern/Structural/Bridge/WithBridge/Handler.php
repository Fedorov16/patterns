<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithBridge;

class Handler extends ImageAbstract
{
    public function run()
    {
        $this->getRealization()->setSize();
        $this->doCommonLogic();
    }
}
