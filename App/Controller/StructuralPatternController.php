<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Structural\Adapter\Package\ImageLibraryAdapter;
use App\Pattern\Structural\Adapter\Response\JsonCustomResponse;
use App\Pattern\Structural\Adapter\Response\XmlCustomResponse;
use App\Pattern\Structural\Adapter\Response\XmlJsonCustomResponseAdapter;
use App\Pattern\Structural\Facade\MediaFacade;
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

    #[Route('/facade', name: 'facade')]
    public function facade(): void
    {
        InfoRender::showInfo('Facade', 'https://refactoring.guru/ru/design-patterns/facade');
        $media = new MediaFacade();
        $media->uploadImage('nameOfImage');
        $media->uploadVideo('nameOfVideo');

        dump($media->getImage(), $media->getVideo());

        $media->editImage('nameOfImage2');
        dump('UPDATED ' . $media->getImage());
    }
}
