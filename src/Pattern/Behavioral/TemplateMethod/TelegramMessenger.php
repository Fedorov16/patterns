<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\TemplateMethod;

class TelegramMessenger extends AbstractMessenger
{
    public function __construct(private array $data) {}

    protected function getData(): string
    {
        return implode(',', $this->data);
    }

    protected function send(string $data)
    {
        dump(__CLASS__);
        dump($data);
    }
}
