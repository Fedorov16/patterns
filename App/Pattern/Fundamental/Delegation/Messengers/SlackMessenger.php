<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\Delegation\Messengers;

class SlackMessenger extends AbstractMessenger
{
    /**
     * Here have to be your logic to send the message by Slack
     */
    public function send(): void
    {
        $sender = $this->getSender();
        $recipient = $this->getRecipient();
        $message = $this->getMessage();

        echo "<div style='background-color: #c6efef'>
                <p>From: $sender</p>
                <p>To: $recipient</p>
                <p>Message: $message</p>
              </div>";
    }
}
