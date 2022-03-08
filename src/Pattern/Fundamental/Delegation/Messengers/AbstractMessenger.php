<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\Delegation\Messengers;

use App\Pattern\Fundamental\Delegation\Messengers\Interface\MessengerInterface;

abstract class AbstractMessenger implements MessengerInterface
{
    private string $sender;
    private string $recipient;
    private string $message;

    public function getSender(): string
    {
        return $this->sender;
    }

    public function setSender(string $sender): MessengerInterface
    {
        $this->sender = $sender;
        return $this;
    }

    public function getRecipient(): string
    {
        return $this->recipient;
    }

    public function setRecipient(string $recipient): MessengerInterface
    {
        $this->recipient = $recipient;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): MessengerInterface
    {
        $this->message = $message;
        return $this;
    }

    abstract public function send(): void;
}
