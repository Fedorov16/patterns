<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Proxy;

class ProxyCharacter implements CharacterInterface
{
    public function __construct(
       private readonly Character $character
    ) {}

    public function getCharacterName(int $id): string
    {
        dump('I called before');
        return $this->character->getCharacterName($id);
    }
}
