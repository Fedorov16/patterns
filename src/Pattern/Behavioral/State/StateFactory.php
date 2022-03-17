<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\State;

class StateFactory
{
    public static function get(string $state): AbstractState
    {
        return match ($state) {
            'draft' => new StateDraft(),
            'moderation' => new StateModeration(),
            'waitApproved' => new StateWaitApproved(),
            'published' => new StatePublished()
        };
    }
}
