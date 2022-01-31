<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Creational\AbstractFactory\AbstractCarFactory;
use App\Pattern\Creational\Builder\Car;
use App\Pattern\Creational\ObjectPull\Client;
use App\Pattern\Creational\ObjectPull\Customer;
use App\Pattern\Creational\ObjectPull\ObjectPull;
use App\Pattern\Creational\ObjectPull\Support;
use App\Pattern\Creational\Prototype\Car as ProtoCar;
use App\Pattern\Creational\Builder\CarBuilder;
use App\Pattern\Creational\Builder\CarDirector;
use App\Pattern\Creational\FactoryMethod\Factory\CarStaticFactory2;
use App\Pattern\Creational\Multiton\CarAdvancedMultiton;
use App\Pattern\Creational\SimpleFactory\Factory\CarFactory;
use App\Pattern\Creational\SingleTon\CarAdvancedSingleton;
use App\Pattern\Creational\SingleTon\CarSingleton;
use App\Pattern\Creational\StaticFactory\Factory\CarStaticFactory;
use Symfony\Component\Routing\Annotation\Route;

class CreationalPatternController
{
    #[Route('/simple_factory/{name}', name: 'simple_factory')]
    public function simpleFactory(string $name): void
    {
        InfoRender::showInfo('Simple Factory', 'https://refactoring.guru/ru/design-patterns/factory-comparison#:~:text=class-,UserFactory,-%7B%0A%20%20%20%20public%20static%20function');
        $carFactory = new CarFactory();
        $entity = $carFactory->build($name);
        dump($entity);
    }

    #[Route('/static_factory/{name}', name: 'static_factory')]
    public function staticFactory(string $name): void
    {
        InfoRender::showInfo('Static Factory', 'https://designpatternsphp.readthedocs.io/ru/latest/Creational/StaticFactory/README.html');
        $entity = CarStaticFactory::build($name);
        dump($entity);
    }

    #[Route('/factory_method/{name}', name: 'factory_method')]
    public function factoryMethod(string $name): void
    {
        InfoRender::showInfo('Factory Method', 'https://refactoring.guru/ru/design-patterns/factory-method/php/example');

        $factory = CarStaticFactory2::build($name);
        $factory->fixCar();
    }

    #[Route('/abstract_factory/{name}', name: 'abstract_factory')]
    public function abstractFactory(string $name): void
    {
        InfoRender::showInfo('Abstract Factory', 'https://refactoring.guru/ru/design-patterns/abstract-factory');
        $factory = AbstractCarFactory::build($name);
        $factory->makePrototype()->newIdea();
        $factory->makeConstruct()->prototypeIdea();
        $factory->makeCar()->constructCar();
    }

    #[Route('/singleton', name: 'singleton')]
    public function singleton(): void
    {
        InfoRender::showInfo('Singleton', 'https://refactoring.guru/ru/design-patterns/singleton/php/example');
        $carInstance1 = CarSingleton::getInstance();
        $carInstance2 = CarSingleton::getInstance();
        dump($carInstance1, $carInstance2, $carInstance1 === $carInstance2);

        $carInstance3 = CarAdvancedSingleton::getInstance();
        $carInstance4 = CarAdvancedSingleton::getInstance();
        dump($carInstance3, $carInstance4, $carInstance3 === $carInstance4);
    }

    #[Route('/multiton', name: 'multiton')]
    public function multiton(): void
    {
        InfoRender::showInfo('Multiton', 'https://maxsite.org/page/php-multiton');

        $carInstance1 = CarAdvancedMultiton::getInstance('lada');
        $carInstance2 = CarAdvancedMultiton::getInstance('bmw');
        $carInstance3 = CarAdvancedMultiton::getInstance('lada');
        $carInstance4 = CarAdvancedMultiton::getInstance('bmw');
        dump($carInstance1, $carInstance2, $carInstance3, $carInstance4, $carInstance1 === $carInstance3);
    }

    #[Route('/builder', name: 'builder')]
    public function builder(): void
    {
        InfoRender::showInfo('Builder', 'https://refactoring.guru/ru/design-patterns/builder');
//        $car1 = new Car(1, 'red', 'V8', [], true);
        $car2 = new Car();
        $car2
            ->setModelNumber(1)
            ->setColor('Blue')
            ->setEngine('V8')
            ->setExtraData([])
            ->setIsPopular(true);

        dump($car2);

        $carBuilder = new CarBuilder();
        $carBuilder
            ->setModelNumber(9)
            ->setColor('Blue')
            ->setEngine('V8')
            ->setExtraData([])
            ->setIsPopular(true);

        $car3 = $carBuilder->get();

        dump($car3, $carBuilder);

        $carDirector = new CarDirector(new CarBuilder());
        $minCar = $carDirector->getMinimalCar();

        dump($minCar);

        $stableCar = $carDirector->getStableCar();
        $stableCar->setColor('green');

        dump($stableCar);
    }

    #[Route('/prototype', name: 'prototype')]
    public function prototype(): void
    {
        InfoRender::showInfo('Prototype', 'https://refactoring.guru/ru/design-patterns/prototype');
        $car = ProtoCar::getFromDB();

        $car2 = clone $car;
        $car2->getReleaseDate()->setDate(2022, 06, 25);
        dump($car, $car2);
    }

    #[Route('/object_pull', name: 'object_pull')]
    public function objectPull(): void
    {
        InfoRender::showInfo('Object Pull', 'https://designpatternsphp.readthedocs.io/ru/latest/Creational/Pool/README.html');
        $objectPull = ObjectPull::getInstance();

        $objectPull
            ->addObject(new Customer())
            ->addObject(new Client())
            ->addObject(new Support())
            ;
        dump($objectPull);

        $customer = $objectPull->getObject(Customer::class);
        $customer
            ?->setPhone(12345)
            ->setName('Customer1');

        $client = $objectPull->getObject(Client::class);

        $client
            ?->setOrderNumber(1)
            ->setName('Client1')
            ->setEmail('client1@gmail.com');

        $support = $objectPull->getObject(Support::class);
        $support2 = $objectPull->getObject(Support::class);

        $support
            ?->setSupportNumber(111)
            ->setName('Support1');

        $support2?->setSupportNumber(222)
            ->setName('Support2');

        dump($objectPull);

        $objectPull->clear($support);
        dump($objectPull);
    }
}
