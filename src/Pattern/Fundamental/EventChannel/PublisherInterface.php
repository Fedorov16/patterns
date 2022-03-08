<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\EventChannel;

interface PublisherInterface
{
    public function publish(string $info);
}
