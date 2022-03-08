<?php

declare(strict_types=1);

namespace App\Pattern\Creational\SingleTon;

final class CarSingleton
{
    private static CarSingleton $instance;

    public static function getInstance(): CarSingleton
    {
        return self::$instance ?? self::$instance = new self();
    }
}
