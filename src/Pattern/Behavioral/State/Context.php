<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\State;

class Context
{
    private AbstractState $state;
    private string $status;

    public function __construct(AbstractState $state)
    {
        $this->status = $state->getStatus();
        $this->setState($state);
    }

    public function setState(AbstractState $state): void
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function publish(string $role): self
    {
        $this->state->publish($role);
        $this->state->set($role);

        return $this;
    }
}
