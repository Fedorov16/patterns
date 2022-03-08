<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\Delegation\Messengers;

class EmailMessenger extends AbstractMessenger
{
    /**
     * Here have to be your logic to send the message by Email
     */
    public function send(): void
    {
        $sender = $this->getSender();
        $recipient = $this->getRecipient();
        $message = $this->getMessage();

        echo "<div style='background-color: rgba(182,120,4,0.45)'>
                <p>From: $sender</p>
                <p>To: $recipient</p>
                <p>Message: $message</p>
              </div>";
    }
}
