<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Decorator;

Class TelegramDecorator implements NotifierInterface
{
    public function __construct(
        private readonly NotifierInterface $decorator
    ) {}

    public function notify(string $string): void
    {
        $this->beforeNotify();
        $this->decorator->notify($string);
        $this->afterNotify();
    }

    private function beforeNotify()
    {
        dump('Before Telegram Notify');
    }

    private function afterNotify()
    {
        dump('After Telegram Notify');
    }
}
