<?php

declare(strict_types=1);

namespace App\Pattern\Creational\Multiton;

trait MultitonTrait
{
    private static array $instance = [];

    public static function getInstance(string $name)
    {
        return static::$instance[$name] ?? static::$instance[$name] = new self();
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
