<?php

declare(strict_types=1);

namespace App\Pattern\Creational\Builder;

class CarDirector
{
    private CarBuilderInterface $builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function getMinimalCar(): Car
    {
        return $this->builder->get();
    }

    public function getStableCar(): Car
    {
        $this->builder->setIsPopular(true);
        $this->builder->setEngine('V8');
        $this->builder->setModelNumber(777);

        return $this->builder->get();
    }
}
