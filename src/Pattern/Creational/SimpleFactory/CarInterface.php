<?php

declare(strict_types=1);

namespace App\Pattern\Creational\SimpleFactory;

interface CarInterface
{
    public function getModel(): void;
    public function getColor(): void;
    public function getSpeed(): void;
}