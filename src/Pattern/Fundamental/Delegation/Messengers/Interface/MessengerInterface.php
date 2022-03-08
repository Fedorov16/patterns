<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\Delegation\Messengers\Interface;

interface MessengerInterface
{
    public function setSender(string $sender): self;
    public function setRecipient(string $recipient): self;
    public function setMessage(string $message): self;

    public function getSender(): string;
    public function getRecipient(): string;
    public function getMessage(): string;

    public function send(): void;
}
