<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\ChainOfResponsibility;

interface MiddlewareInterface
{
    public function linkWith(MiddlewareInterface $handler): MiddlewareInterface;
    public function check();
}
