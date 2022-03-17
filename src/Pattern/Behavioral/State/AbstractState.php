<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\State;

abstract class AbstractState
{
    protected Context $context;

    public function setContext(Context $context): void
    {
        $this->context = $context;
    }

    public function getStatus(): string
    {
        return $this::STATUS;
    }

    protected function isAdmin($role): bool
    {
        return $role === 'admin';
    }

    protected function isPolicy(string $role): bool
    {
        return $role === 'policy';
    }

    public function publish(string $role): void {}
    public function set(string $role): void {}
}
