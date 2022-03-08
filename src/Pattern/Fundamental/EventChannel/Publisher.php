<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\EventChannel;

class Publisher implements PublisherInterface
{
    private EventChannelInterface $eventChannel;
    private string $topic;

    public function __construct(string $topic, EventChannelInterface $eventChannel)
    {
        $this->eventChannel = $eventChannel;
        $this->topic = $topic;
    }

    public function publish(string $info): void
    {
        $this->eventChannel->publish($this->topic, $info);
    }
}
