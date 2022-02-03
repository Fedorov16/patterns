<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Behavioral\Specification\Customer;
use App\Pattern\Behavioral\Specification\CustomerCountry;
use App\Pattern\Behavioral\Specification\CustomerIsMatch;
use App\Pattern\Behavioral\Specification\CustomerLevel;
use App\Pattern\Behavioral\Specification\Specification\AndSpecification;
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
}
