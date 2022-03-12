<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Mediator;

class User
{
    private string $name;
    private Messenger $messenger;

    public function __construct($userName, Messenger $messenger)
    {
        $this->name = $userName;
        $this->messenger = $messenger;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sendMessage(string $message): void
    {
        $this->messenger->showMessage($this, $message);
    }
}
