<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Structural\Adapter\Package\ImageLibrary;
use App\Pattern\Structural\Adapter\Package\ImageLibraryAdapter;
use App\Pattern\Structural\Adapter\Response\JsonCustomResponse;
use App\Pattern\Structural\Adapter\Response\XmlCustomResponse;
use App\Pattern\Structural\Adapter\Response\XmlJsonCustomResponseAdapter;
use App\Pattern\Structural\Bridge\WithBridge\WithBridge;
use App\Pattern\Structural\Bridge\WithNoBridge\WithoutBridge;
use App\Pattern\Structural\Composite\Composite;
use App\Pattern\Structural\Decorator\SlackNotifier;
use App\Pattern\Structural\Decorator\TelegramDecorator;
use App\Pattern\Structural\Decorator\WhatsUpDecorator;
use App\Pattern\Structural\Facade\MediaFacade;
use App\Pattern\Structural\Proxy\Character;
use App\Pattern\Structural\Proxy\ProxyCharacter;
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

        $withoutBridge = new WithoutBridge();
        $withoutBridge->run();

        $bridge = new WithBridge();
        $bridge->run();
    }

    #[Route('/composite', name: 'composite')]
    public function composite(): void
    {
        InfoRender::showInfo('Composite', 'https://refactoring.guru/ru/design-patterns/composite');

        $composite = new Composite();
        $composite->run();
    }

    #[Route('/decorator', name: 'decorator')]
    public function decorator(): void
    {
        InfoRender::showInfo('Decorator', 'https://refactoring.guru/ru/design-patterns/decorator');
        $slackNotifier = new SlackNotifier();
        $slackNotifier->notify('Only Slack New message');

        $decorator = new TelegramDecorator(new SlackNotifier());
        $decorator->notify('Telegram Decorator new message');

        $decorator = new WhatsUpDecorator(new SlackNotifier());
        $decorator->notify('WhatsUp Decorator new message');

        $decorator = (new WhatsUpDecorator(new TelegramDecorator(new SlackNotifier())));
        $decorator->notify('General Decorator new message');
    }

    #[Route('/proxy', name: 'proxy')]
    public function proxy(): void
    {
        InfoRender::showInfo('Proxy', 'https://refactoring.guru/ru/design-patterns/proxy');

        $character = new Character();
        $characterName = $character->getCharacterName(823);
        dump($characterName);

        $proxyCharacter = new ProxyCharacter($character);
        $proxyCharacterName = $proxyCharacter->getCharacterName(583);
        dump($proxyCharacterName);
    }
}
