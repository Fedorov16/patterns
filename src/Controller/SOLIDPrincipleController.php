<?php

declare(strict_types=1);

namespace App\Controller;

use App\Principle\Solid\DependencyInversion\Mobile;
use App\Principle\Solid\DependencyInversion\MobileService;
use App\Principle\Solid\DependencyInversion\Tablet;
use App\Principle\Solid\Liskov\BirdCulc;
use App\Principle\Solid\Liskov\Duck;
use App\Principle\Solid\OpenClosed\Entity\Product;
use App\Principle\Solid\OpenClosed\Logger\DbLogger;
use App\Principle\Solid\OpenClosed\Logger\FileLogger;
use App\Principle\Solid\OpenClosed\Service\ProductService;
use App\Principle\Solid\SingleResponsibility\Entity\Zone;
use Symfony\Component\Routing\Annotation\Route;

class SOLIDPrincipleController
{
    #[Route('/single_responsibility', name: 'single_responsibility')]
    public function singleResponsibility(): void
    {
        InfoRender::showInfo('Single Responsibility', 'https://habr.com/ru/post/208442/#:~:text=%D0%B7%D0%B0%D0%B2%D0%B8%D1%81%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B5%D0%B9%20(Dependency%20Invertion)-,%D0%9F%D1%80%D0%B8%D0%BD%D1%86%D0%B8%D0%BF,-%D0%B5%D0%B4%D0%B8%D0%BD%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B9%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20(Single');
        InfoRender::showArticle('На каждый объект должна быть возложена одна единственная обязанность');

        $config = ['dbPath' => '../App/Principle/Solid/SingleResponsibility/phpSqlite.db'];
        $zone = new Zone($config);
        $zone
            ->setName('Zone1')
            ->setSettings(['isInternalZone' => true]);

        $zone->save();
    }

    #[Route('/open-closed', name: 'open-closed')]
    public function openClosed(): void
    {
        InfoRender::showInfo('Open-Closed', 'https://habr.com/ru/post/208442/#:~:text=%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B5%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0%20OrderRepository.-,class%20OrderRepository,-%7B%0A%09public%20function%20load');
        InfoRender::showArticle('Классы должны быть открыты к расширению, и закрыты к модификации.');

        $fileLogger = new FileLogger();
        $product = new Product();
        $product->setName('Product1');

        $logger = new DbLogger();
        $service = new ProductService($product, $fileLogger);
        $service->prepareProduct();
    }

    #[Route('/liskov_substitution', name: 'liskov_substitution')]
    public function liskovSubstitution(): void
    {
        InfoRender::showInfo('Liskov Substitution', 'https://habr.com/ru/post/208442/#:~:text=2%20%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%20%D1%81%D1%83%D1%89%D0%BD%D0%BE%D1%81%D1%82%D0%B8%3A-,class%20Rectangle,-%7B%0A%09protected%20%24width%3B%0A%09protected');
        InfoRender::showArticle('Поведение наследуемых классов не должно противоречить поведению, заданному базовым классом, <br> то есть поведение наследуемых классов должно быть ожидаемым для кода который использует базовый класс.');

        $birdCulc = new BirdCulc(new Duck(), -3);
//        $birdCulc = new BirdCulc(new Penguin(), -3);
        $birdCulc->culcCurentSpeed();
    }
    
    #[Route('/interface_segregation', name: 'interface_segregation')]
    public function interfaceSegregation(): void
    {
        InfoRender::showInfo('Interface Segregation', 'https://habr.com/ru/post/208442/#:~:text=IItem%20%D0%BD%D0%B0%20%D0%BD%D0%B5%D1%81%D0%BA%D0%BE%D0%BB%D1%8C%D0%BA%D0%BE-,interface%20IItem,-%7B%0A%09public%20function%20setCondition');
        InfoRender::showArticle('Клиентский код не должен имплементировать интерфейсы, которые он не использует, <br> не должен определять методы, которые ему не нужны');
//        Look on App/Principle/Solid/InterfaceSegregation/Interfaces
    }
    
    #[Route('/dependency_inversion', name: 'dependency_inversion')]
    public function dependencyInversion(): void
    {
        InfoRender::showInfo('Dependency Inversion', 'https://habr.com/ru/post/208442/#:~:text=%D0%B7%D0%B0%D0%B2%D0%B8%D1%81%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0%20Customer-,class%20Customer,-%7B%0A%09private%20%24currentOrder%20%3D%20null');
        InfoRender::showArticle('Зависимости должны строится относительно абстракций, а не деталей');

        $mobile = new Mobile();
//        $tablet = new Tablet();
        $mobileService = new MobileService($mobile);
        $mobileService->makeACall();
    }
}
