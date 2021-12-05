<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\EventChannel;

interface SubscriberInterface
{
    public function getName(): string;
    public function notify(string $info): void;
}
