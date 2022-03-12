<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Decorator;

class SlackNotifier implements NotifierInterface
{
    public function notify(string $string): void
    {
        dump($string);
    }
}
