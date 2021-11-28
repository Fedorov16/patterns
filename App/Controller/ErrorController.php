<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class ErrorController
{
    /**
     * @Route("/error",name="error")
     */
    public function index(): void
    {
        echo 'No route found';
    }
}
