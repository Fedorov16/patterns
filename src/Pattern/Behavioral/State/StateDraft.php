<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\State;

class StateDraft extends AbstractState
{
    protected const STATUS = 'draft';

    public function publish(string $role): void
    {
        dump('notify about change from status draft');
    }

    public function set(string $role): void
    {
        if ($this->isAdmin($role)) {
            $this->context->setStatus('published');
            $this->context->setState(StateFactory::get('published'));
            return;
        }

        $this->context->setStatus('moderation');
        $this->context->setState(StateFactory::get('moderation'));
    }
}
