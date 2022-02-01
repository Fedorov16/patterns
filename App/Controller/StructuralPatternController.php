<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class StructuralPatternController
{
    #[Route('/adapter', name: 'adapter')]
    public function adapter(): void
    {
        InfoRender::showInfo('Adapter', 'https://refactoring.guru/ru/design-patterns/adapter');
    }
}
