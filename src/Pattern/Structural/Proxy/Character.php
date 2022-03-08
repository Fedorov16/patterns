<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Proxy;

use GuzzleHttp\Client;

class Character implements CharacterInterface
{
    public function getCharacterName(int $id): string
    {
        $client = new Client();
        $response = $client->get("https://www.anapioficeandfire.com/api/characters/$id");
        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR)['name'];
    }
}
