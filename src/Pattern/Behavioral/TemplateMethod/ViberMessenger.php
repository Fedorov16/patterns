<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\TemplateMethod;

class ViberMessenger extends AbstractMessenger
{
    public function __construct(private ViberObject $data) {}

    protected function getData(): string
    {
        return $this->data->get();
    }

    protected function send(string $data)
    {
        dump(__CLASS__);
        dump($data);
    }
}
