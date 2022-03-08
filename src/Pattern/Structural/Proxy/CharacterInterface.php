<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Proxy;

interface CharacterInterface
{
    public function getCharacterName(int $id): string;
}
