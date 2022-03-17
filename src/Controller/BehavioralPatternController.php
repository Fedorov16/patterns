<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Behavioral\Iterator\DirectoryIterator;
use App\Pattern\Behavioral\Iterator\GameData;
use App\Pattern\Behavioral\Iterator\GameIterator;
use App\Pattern\Behavioral\Iterator\GameIteratorAggregate;
use App\Pattern\Behavioral\Iterator\RecursiveIterator;
use App\Pattern\Behavioral\Mediator\Messenger;
use App\Pattern\Behavioral\Mediator\User;
use App\Pattern\Behavioral\Observer\GameSubject;
use App\Pattern\Behavioral\Observer\Informator;
use App\Pattern\Behavioral\Observer\LoggerObserver;
use App\Pattern\Behavioral\Specification\Customer;
use App\Pattern\Behavioral\Specification\CustomerCountry;
use App\Pattern\Behavioral\Specification\CustomerIsMatch;
use App\Pattern\Behavioral\Specification\CustomerLevel;
use App\Pattern\Behavioral\Specification\Specification\AndSpecification;
use App\Pattern\Behavioral\State\Context;
use App\Pattern\Behavioral\State\Document;
use App\Pattern\Behavioral\State\StateDraft;
use App\Pattern\Behavioral\State\StateFactory;
use App\Pattern\Behavioral\Strategy\GameSetting;
use App\Pattern\Behavioral\Strategy\StrategyFactory;
use Symfony\Component\Routing\Annotation\Route;

class BehavioralPatternController
{
    #[Route('/strategy/{levelDifficult}', name: 'strategy')]
    public function strategy(string $levelDifficult): void
    {
        InfoRender::showInfo('Strategy', 'https://refactoring.guru/ru/design-patterns/strategy');
        $strategy = StrategyFactory::build($levelDifficult);
        $gameSetting = new GameSetting($strategy);
        $score = $gameSetting->scoreFight();
        dump(sprintf('level: %s score: %d',$levelDifficult, $score));
    }

    #[Route('/specification', name: 'specification')]
    public function specification(): void
    {
        InfoRender::showInfo('Specification', 'http://www.inanzzz.com/index.php/post/xme1/specifications-design-pattern-example-in-php');
        $customer = new Customer();
        $customer->setCustomerLevel(CustomerLevel::GREEN);
        $customer->setCustomerCountry(CustomerCountry::RUSSIA);
        $customer->setCustomerAge(18);

        //1 decision
//        if ($customer->getCustomerAge() >= 18
//            && in_array($customer->getCustomerLevel(), [CustomerLevel::GREEN, CustomerLevel::RED, CustomerLevel::BLACK], true)
//            && in_array($customer->getCustomerCountry(), [CustomerCountry::RUSSIA, CustomerCountry::FINLAND], true)
//        ) {
//            $customer->setMatchLevel(true);
//        }

        //2 decision
//        if ($customer->isMatchCustomerLevel()) {
//            $customer->setMatchLevel(true);
//        }
        //3 decision Specification
        $customerIsMatch = new CustomerIsMatch();
//
        if ($customerIsMatch->isSatisfiedBy($customer))
        {
            $customer->setMatchLevel(true);
        }

        dump($customer);
    }

    #[Route('/chain_of_responsibility', name: 'chain_of_responsibility')]
    public function chainOfResponsibility(): void
    {
        InfoRender::showInfo('Chain of Responsibility', 'https://refactoring.guru/ru/design-patterns/chain-of-responsibility');
        //        App/kernel.php:27
        dump('We are in the controller');
    }

    #[Route('/command', name: 'command')]
    public function command(): void
    {
        InfoRender::showInfo('Command', 'https://ru.wikipedia.org/wiki/%D0%9A%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4%D0%B0_(%D1%88%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD_%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)');
        //        bin/console
    }

    #[Route('/iterator', name: 'iterator')]
    public function iterator(): void
    {
        /** @link https://habr.com/ru/post/324934/ */
        InfoRender::showInfo('Iterator', 'https://refactoring.guru/ru/design-patterns/iterator');
        $gameSetting = new GameData();
        $array = $gameSetting->getSimpleArray();
        $result = [];
        $iterator = new GameIterator($array);
//        $iterator = new GameIteratorAggregate($array);
        foreach ($iterator as $key => $item) {
            $result[$key] = $item;
        }
        dump($result);

//        $directoryIterator = new DirectoryIterator(__DIR__);
////        $directoryIterator = new DirectoryIterator('/var/www/html/src/');
//        foreach ($directoryIterator as $file) {
//            if (!$file->isDir()) {
//                dump($file->getFilename());
//            }
//        }

//        $iterator = new RecursiveIterator($array);
//        $recursive = $iterator->getIterator();
//        while ($recursive->valid()) {
//            if ($recursive->hasChildren()) {
//                foreach ($recursive->getChildren() as $key => $value) {
//                    $string = "$key => $value";
//                    dump($string);
//                }
//            }
//            $recursive->next();
//        }


    }

    #[Route('/mediator', name: 'mediator')]
    public function mediator(): void
    {
        InfoRender::showInfo('Mediator', 'https://refactoring.guru/ru/design-patterns/mediator');
        $messenger = new Messenger();

        $sergeyUser = new User('Sergey', $messenger);
        $alexUser = new User('Alex', $messenger);

        $sergeyUser->sendMessage('Hey, Lesha');
        $alexUser->sendMessage('Hi, Sergey');
    }

    #[Route('/observer', name: 'observer')]
    public function observer(): void
    {
        InfoRender::showInfo('Observer', 'https://refactoring.guru/ru/design-patterns/observer/php/example');
        //Different from Event Channel
        /** @link https://webdevblog.ru/v-chem-raznica-mezhdu-shablonami-observer-i-pub-sub/#:~:text=%D0%BF%D0%BE%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%D0%BE%20%D1%82%D0%B0%D0%BA%D0%B8%D0%BC%20%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BE%D0%BC%3A-,Image,-source%3A%C2%A0developers%2Dclub */

        $subject = new GameSubject();
        $loggerObserver = new LoggerObserver();
        $informator = new Informator();

        $subject->attach($loggerObserver);
        $subject->attach($informator);
//        $subject->detach($informator);
        $subject->send(['id' => 55, 'name' => 'Witcher', 'action' => 'I']);
    }

    #[Route('/state', name: 'state')]
    public function state(): void
    {
        InfoRender::showInfo('State', 'https://refactoring.guru/ru/design-patterns/state');
        $document = new Document();
//        $document->publish()->publish();
//        $document->publish2('policy')->publish2('policy');

        $state = 'draft';
        $role = 'admin';
        $stateFactory = StateFactory::get($state);

        $context = new Context($stateFactory);
        $context->publish($role);
        dump($context->getStatus());
    }
}
