<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Structural\Adapter\Package\ImageLibraryAdapter;
use App\Pattern\Structural\Adapter\Response\JsonCustomResponse;
use App\Pattern\Structural\Adapter\Response\XmlCustomResponse;
use App\Pattern\Structural\Adapter\Response\XmlJsonCustomResponseAdapter;
use App\Pattern\Structural\Bridge\WithBridge\Formats\Jpeg;
use App\Pattern\Structural\Bridge\WithBridge\Formats\Png;
use App\Pattern\Structural\Bridge\WithNoBridge\AddShadowJpeg;
use App\Pattern\Structural\Bridge\WithNoBridge\AddShadowPng;
use App\Pattern\Structural\Bridge\WithNoBridge\ProcessJpeg;
use App\Pattern\Structural\Bridge\WithNoBridge\ProcessPng;
use App\Pattern\Structural\Bridge\WithNoBridge\WithoutBridge;
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

    #[Route('/bridge', name: 'bridge')]
    public function bridge(): void
    {
        InfoRender::showInfo('Bridge', 'https://refactoring.guru/ru/design-patterns/bridge');

        //No bridge examples
        $jpeg = new Jpeg();
        $jpeg
            ->setName('image1')
            ->setSize('4005');

        $addShadowJpeg = new AddShadowJpeg($jpeg);

        $shadowier = new WithoutBridge($addShadowJpeg);
        $shadowier->run();

        $processJpeg = new ProcessJpeg($jpeg);

        $handler = new WithoutBridge($processJpeg);
        $handler->run();

        $png = new Png();
        $png
            ->setName('image2')
            ->setSize('900');

        $addShadowJpeg = new AddShadowPng($png);

        $shadowier = new WithoutBridge($addShadowJpeg);
        $shadowier->run();

        $processJpeg = new ProcessPng($png);

        $handler = new WithoutBridge($processJpeg);
        $handler->run();

    }
}
