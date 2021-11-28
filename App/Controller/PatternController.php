<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class PatternController
{
    #[Route('/', name: 'index')]
    public function index() {
        echo 'project is ready for work';
    }
}