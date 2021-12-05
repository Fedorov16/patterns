<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Creational\SimpleFactory\Factory\CarFactory;
use App\Pattern\Creational\StaticFactory\Factory\CarStaticFactory;
use Symfony\Component\Routing\Annotation\Route;

class CreationalPatternController
{
    #[Route('/simple_factory/{name}', name: 'simple_factory')]
    public function simpleFactory($name): void
    {
        InfoRender::showInfo('Simple Factory', 'https://refactoring.guru/ru/design-patterns/factory-comparison#:~:text=class-,UserFactory,-%7B%0A%20%20%20%20public%20static%20function');
        $carFactory = new CarFactory();
        $entity = $carFactory->build($name);
        dump($entity);
    }

    #[Route('/static_factory/{name}', name: 'static_factory')]
    public function staticFactory($name): void
    {
        InfoRender::showInfo('Static Factory', 'https://designpatternsphp.readthedocs.io/ru/latest/Creational/StaticFactory/README.html');
        $entity = CarStaticFactory::build($name);
        dump($entity);
    }
}