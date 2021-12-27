<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Creational\AbstractFactory\AbstractCarFactory;
use App\Pattern\Creational\FactoryMethod\Factory\CarStaticFactory2;
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
        dump($carInstance1, $carInstance2, $carInstance1 === $carInstance2 );

        $carInstance3 = CarAdvancedSingleton::getInstance();
        $carInstance4 = CarAdvancedSingleton::getInstance();
        dump($carInstance3, $carInstance4, $carInstance3 === $carInstance4);
    }
}
