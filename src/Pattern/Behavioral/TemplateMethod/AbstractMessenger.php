<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\TemplateMethod;

abstract class AbstractMessenger
{
    public function sendMessage()
    {
        $data = $this->getData();
        $this->hidePhone($data);
        $this->hidePrivateData($data);
        $this->send($data);
    }

    abstract protected function getData();

    private function hidePhone(string $data): string
    {
        dump('phone was hide');
        return $data;
    }

    private function hidePrivateData(string $data): string
    {
        dump('private data was hide');
        return $data;
    }

    abstract protected function send(string $data);
}
