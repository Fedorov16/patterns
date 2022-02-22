<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Decorator;

interface SlackNotifierDecoratorInterface
{
    public function notify(string $string);
}
