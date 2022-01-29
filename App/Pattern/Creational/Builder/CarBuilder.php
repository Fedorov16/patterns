<?php

declare(strict_types=1);

namespace App\Pattern\Creational\Builder;

class CarBuilder implements CarBuilderInterface
{
    private Car $car;

    public function __construct()
    {
        $this->create();
    }

    public function create(): void
    {
        $this->car = new Car();
    }

    public function setModelNumber(int $model): CarBuilderInterface
    {
        if ($model === 9) {
            $this->car->setModelNumber(99);
            return $this;
        }

        $this->car->setModelNumber($model);
        return $this;
    }

    public function setColor(string $color): CarBuilderInterface
    {
        $this->car->setColor($color);
        return $this;
    }

    public function setEngine(string $engine): CarBuilderInterface
    {
        $this->car->setEngine($engine);
        return $this;
    }

    public function setExtraData(array $extraData): CarBuilderInterface
    {
        $this->car->setExtraData($extraData);
        return $this;
    }

    public function setIsPopular(bool $isPopular): CarBuilderInterface
    {
        $this->car->setIsPopular($isPopular);
        return $this;
    }

    public function get(): Car
    {
        $car = $this->car;

        $this->create();

        return $car;
    }
}
