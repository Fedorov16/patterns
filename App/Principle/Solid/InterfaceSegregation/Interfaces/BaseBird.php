<?php

declare(strict_types=1);

namespace App\Principle\Solid\InterfaceSegregation\Interfaces;

interface BaseBird
{
    public function fly(): void;
    public function swim(): void;
    public function sing(): void;
}
