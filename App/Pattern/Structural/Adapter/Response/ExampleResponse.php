<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Adapter\Response;

class ExampleResponse
{
    public static function get(): array
    {
        return [
            'id' => 1,
            'category' => [5, 7],
            'extraData' => 'someInformation',
        ];
    }
}