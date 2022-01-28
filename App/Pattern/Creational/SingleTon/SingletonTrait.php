<?php

declare(strict_types=1);

namespace App\Pattern\Creational\SingleTon;

trait SingletonTrait
{
    private static CarAdvancedSingleton|SingletonTrait $instance;

    public static function getInstance(): SingletonTrait|CarAdvancedSingleton
    {
        return static::$instance ?? static::$instance = new self();
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
}
