<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithNoBridge;

abstract class ImageAbstract
{
    public function run(): void
    {
        dump(get_class($this));
        $this->prepare();
    }

    abstract protected function prepare();
}
