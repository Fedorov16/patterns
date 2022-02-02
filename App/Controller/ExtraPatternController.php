<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class ExtraPatternController
{
    #[Route('/specification', name: 'specification')]
    public function specification(): void
    {
        InfoRender::showInfo('Specification', 'https://habr.com/ru/post/455030/');
    }
}
