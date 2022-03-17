<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\State;

class StateModeration extends AbstractState
{
    protected const STATUS = 'moderation';

    public function publish(string $role): void
    {
        dump('do something');
    }

    public function set(string $role): void
    {
        if ($this->isPolicy($role)) {
            $this->context->setStatus('published');
            $this->context->setState(StateFactory::get('published'));
            return;
        }

        $this->context->setStatus('waitApproved');
        $this->context->setState(StateFactory::get('moderation'));
    }
}
