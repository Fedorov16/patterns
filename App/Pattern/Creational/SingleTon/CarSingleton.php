<?php

declare(strict_types=1);

namespace App\Pattern\Creational\SingleTon;

final class CarSingleton
{
    public static CarSingleton $instance;

    public static function getInstance(): CarSingleton
    {
        return static::$instance ?? static::$instance = new self();
    }
}