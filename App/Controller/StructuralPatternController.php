<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Structural\Adapter\Package\ImageLibrary;
use App\Pattern\Structural\Adapter\Package\ImageLibraryAdapter;
use App\Pattern\Structural\Adapter\Package\ImageLibraryThirdParty;
use App\Pattern\Structural\Adapter\Response\JsonCustomResponse;
use App\Pattern\Structural\Adapter\Response\XmlCustomResponse;
use App\Pattern\Structural\Adapter\Response\XmlJsonCustomResponseAdapter;
use Symfony\Component\Routing\Annotation\Route;

class StructuralPatternController
{
    #[Route('/adapter', name: 'adapter')]
    public function adapter(): void
    {
        InfoRender::showInfo('Adapter', 'https://refactoring.guru/ru/design-patterns/adapter');

        $responseJson = new JsonCustomResponse();
        $responseXml = new XmlCustomResponse();

        dump($responseJson->getJsonResponse(), $responseXml->getXmlResponse());

        $xmlToJsonResponse = new XmlJsonCustomResponseAdapter($responseXml);

        dump($xmlToJsonResponse->getJsonResponse());

//        $imageLibrary = new ImageLibrary();
        $imageLibrary = new ImageLibraryAdapter();
        dump($imageLibrary->upload('Image'), $imageLibrary->get('Image'));
    }
}
