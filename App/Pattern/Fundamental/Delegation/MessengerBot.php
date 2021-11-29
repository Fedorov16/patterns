<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\Delegation;

use App\Pattern\Fundamental\Delegation\Messengers\EmailMessenger;
use App\Pattern\Fundamental\Delegation\Messengers\Interface\MessengerInterface;
use App\Pattern\Fundamental\Delegation\Messengers\SlackMessenger;
use App\Pattern\Fundamental\Delegation\Messengers\TelegramMessenger;

class MessengerBot implements MessengerInterface
{
    private MessengerInterface $messenger;

    public function __construct()
    {
        $this->toSlack();
    }

    public function setSender(string $sender): MessengerInterface
    {
        $this->messenger->setSender($sender);
        return $this;
    }

    public function setRecipient(string $recipient): MessengerInterface
    {
        $this->messenger->setRecipient($recipient);
        return $this;
    }

    public function setMessage(string $message): MessengerInterface
    {
        $this->messenger->setMessage($message);
        return $this;
    }

    public function send(): void
    {
        $this->messenger->send();
    }

    public function toSlack(): MessengerInterface
    {
        $this->messenger = new SlackMessenger();
        return $this;
    }

    public function toTelegram(): MessengerInterface
    {
        $this->messenger = new TelegramMessenger();
        return $this;
    }

    public function toEmail(): MessengerInterface
    {
        $this->messenger = new EmailMessenger();
        return $this;
    }

    public function getSender(): string
    {
        return $this->messenger->getSender();
    }

    public function getRecipient(): string
    {
        return $this->messenger->getRecipient();
    }

    public function getMessage(): string
    {
        return $this->messenger->getMessage();
    }
}
