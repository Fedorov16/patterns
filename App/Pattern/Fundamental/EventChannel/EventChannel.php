<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\EventChannel;

class EventChannel implements EventChannelInterface
{
    private array $topics = [];

    public function subscribe(string $topic, SubscriberInterface $subscriber): void
    {
        echo sprintf('<br>%s subscribe to %s info', $subscriber->getName(), $topic);
        $this->topics[$topic][] = $subscriber;
    }

    public function publish(string $topic, string $info): void
    {
        if (!isset($this->topics[$topic])) {
            return;
        }
        foreach ($this->topics[$topic] as $subscriber) {
            $subscriber->notify($info);
        }
    }
}
