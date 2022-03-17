<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\State;

class StateWaitApproved extends AbstractState
{
    protected const STATUS = 'waitApproved';

    public function publish(string $role): void
    {
        dump('do something');
    }

    public function set(string $role): void
    {
        $this->context->setStatus('published');
        $this->context->setState(new StatePublished());
    }
}
