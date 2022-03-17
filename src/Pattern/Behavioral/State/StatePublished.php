<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\State;

class StatePublished extends AbstractState
{
    protected const STATUS = 'published';

    public function publish(string $role): void
    {
        dump('do something');
    }

    public function set(string $role): void
    {
        dump('finish');
    }
}
