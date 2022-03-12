<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Iterator;

class GameData
{
    public function getSimpleArray(): array
    {
        return [
            'low',
            'medium',
            'hard',
        ];
    }

    public function getNestedArray(): array
    {
        return [
            11 => [
                'id' => 14,
                'level' => 'low',
            ],
            22 => [
                'id' => 28,
                'level' => 'hard'
            ],
            33 => 'Hello world'
        ];
    }
}