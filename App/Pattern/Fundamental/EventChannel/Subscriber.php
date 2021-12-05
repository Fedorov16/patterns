<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\EventChannel;

class Subscriber implements SubscriberInterface
{
    private string $subscriberName;

    public function __construct(string $subscriberName)
    {
        $this->subscriberName = $subscriberName;
    }

    public function notify(string $info): void
    {
        echo sprintf('<br>Hew topic %s there is new info for you: %s',$this->subscriberName, $info);
    }

    public function getName(): string
    {
        return $this->subscriberName;
    }
}
