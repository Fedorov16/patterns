<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Adapter\Response;

use Spatie\ArrayToXml\ArrayToXml;

class XmlCustomResponse
{
    public function getXmlResponse(): string
    {
        $data = ExampleResponse::get();

        return ArrayToXml::convert($data);
    }
}
