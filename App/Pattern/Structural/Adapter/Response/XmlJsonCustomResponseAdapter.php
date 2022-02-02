<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Adapter\Response;

class XmlJsonCustomResponseAdapter implements JsonCustomResponseInterface
{
    private XmlCustomResponse $xml;

    public function __construct(XmlCustomResponse $xml)
    {
        $this->xml = $xml;
    }

    public function getJsonResponse(): string
    {
        $xmlResponse = $this->xml->getXmlResponse();
        $xml = simplexml_load_string($xmlResponse);
        return json_encode($xml, JSON_THROW_ON_ERROR);
    }
}