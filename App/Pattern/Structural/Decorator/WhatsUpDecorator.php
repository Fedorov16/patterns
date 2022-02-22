<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Decorator;

Class WhatsUpDecorator implements SlackNotifierDecoratorInterface
{
    public function __construct(
        private readonly SlackNotifierDecoratorInterface $decorator
    ) {}

    public function notify(string $string): void
    {
        $this->beforeNotify();
        $this->decorator->notify($string);
        $this->afterNotify();
    }

    private function beforeNotify()
    {
        dump('Before WhatsUp Notify');
    }

    private function afterNotify()
    {
        dump('After WhatsUp Notify');
    }
}
