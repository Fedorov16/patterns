<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Mediator;

class Messenger implements MediatorInterface
{
    public function showMessage(User $user, string $message): void
    {
        dump($message);
    }
}
