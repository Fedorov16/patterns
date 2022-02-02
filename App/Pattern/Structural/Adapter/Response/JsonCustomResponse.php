<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Adapter\Response;

class JsonCustomResponse implements JsonCustomResponseInterface
{
    public function getJsonResponse(): string
    {
        $data = ExampleResponse::get();

        return json_encode($data, JSON_THROW_ON_ERROR);
    }
}