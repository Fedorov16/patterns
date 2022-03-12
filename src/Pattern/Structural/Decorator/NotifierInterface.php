<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Decorator;

interface NotifierInterface
{
    public function notify(string $string);
}
