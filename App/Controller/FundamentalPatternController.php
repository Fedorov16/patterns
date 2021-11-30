<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Fundamental\Delegation\MessengerBot;
use App\Pattern\Fundamental\EventChannel\EventJob;
use App\Pattern\Fundamental\PropertyContainer\Author;
use Symfony\Component\Routing\Annotation\Route;

class FundamentalPatternController
{
    #[Route('/property_container', name: 'property_container')]
    public function propertyContainer(): void
    {
        InfoRender::showInfo('Property Container', 'https://ru.freejournal.org/index.php/7181824/1/konteyner-svoystv-shablon-proektirovaniya.html');

        $author = new Author();
        $author
            ->setName('Sergey Fedorov')
            ->setEmail('svfedorov16@gmail.com')
            ->setPhone(89819578828)
            ->setAge(27);
        dump($author);

        $author
            ->addProperty('countBestBooks', 5)
            ->setProperty('countBestBooks', 8);
        dump($author);
        $author
            ->addProperty('bestPractice', ['xxx.com', 'xxx2.com'])
            ->deleteProperty('countBestBooks');
        dump($author);
    }

    #[Route('/delegation', name: 'delegation')]
    public function delegation(): void
    {
        InfoRender::showInfo('Delegation', 'https://makedev.org/patterns/fundamental/delegation.html');

        $messenger = new MessengerBot();
        $messenger
            ->setRecipient('#SlackChanelName')
            ->setSender('svfedorov16@gmail.com')
            ->setMessage('https://habr.com/ru/company/otus/blog/567710/');
        $messenger->send();

        $messenger = new MessengerBot();
        $messenger
            ->toTelegram()
            ->setRecipient('#TelegramChanelName')
            ->setSender('svfedorov16@gmail.com')
            ->setMessage('https://habr.com/ru/company/otus/blog/567710/');
        $messenger->send();

        $messenger = new MessengerBot();
        $messenger
            ->toEmail()
            ->setRecipient('swat@myTeam.com')
            ->setSender('svfedorov16@gmail.com')
            ->setMessage('https://habr.com/ru/company/otus/blog/567710/');
        $messenger->send();
    }

    #[Route('/event_channel', name: 'event_channel')]
    public function eventChanel(): void
    {
        InfoRender::showInfo('Event Channel', 'https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BD%D0%B0%D0%BB_%D1%81%D0%BE%D0%B1%D1%8B%D1%82%D0%B8%D0%B9_(%D1%88%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD_%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)');
        $eventJob = new EventJob();
        $eventJob->run();
    }
}
