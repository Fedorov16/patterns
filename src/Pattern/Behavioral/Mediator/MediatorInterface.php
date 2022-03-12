<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Mediator;

interface MediatorInterface
{
    public function showMessage(User $user, string $message): void;
}
