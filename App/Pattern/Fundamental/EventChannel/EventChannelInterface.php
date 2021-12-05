<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\EventChannel;

interface EventChannelInterface
{
    public function publish(string $topic, string $info): void;
    public function subscribe(string $topic, SubscriberInterface $subscriber): void;
}
