<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\Delegation\Messengers;

class TelegramMessenger extends AbstractMessenger
{
    /**
     * Here have to be your logic to send the message by Telegram
     */
    public function send(): void
    {
        $sender = $this->getSender();
        $recipient = $this->getRecipient();
        $message = $this->getMessage();

        echo "<div style='background-color: rgba(36,64,232,0.6)'>
                <p>From: $sender</p>
                <p>To: $recipient</p>
                <p>Message: $message</p>
              </div>";
    }
}
