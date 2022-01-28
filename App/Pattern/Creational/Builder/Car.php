<?php

declare(strict_types=1);

namespace App\Pattern\Creational\Builder;

class Car
{
    private int $model;
    private string $color;
    private string $engine;
    private array $extraData;
    private bool $isPopular;

//    public function __construct(int $model, string $color, string $engine, array $extraData, $isPopular)
//    {
//        $this->model = $model;
//        $this->color = $color;
//        $this->engine = $engine;
//        $this->extraData = $extraData;
//        $this->isPopular = $isPopular;
//    }

    public function setModelNumber(int $model): Car
    {
        $this->model = $model;
        return $this;
    }

    public function getModel(): int
    {
        return $this->model;
    }

    public function setColor(string $color): Car
    {
        $this->color = $color;
        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setEngine(string $engine): Car
    {
        $this->engine = $engine;
        return $this;
    }

    public function getEngine(): string
    {
        return $this->engine;
    }

    public function setExtraData(array $extraData): Car
    {
        $this->extraData = $extraData;
        return $this;
    }

    public function getExtraData(): array
    {
        return $this->extraData;
    }

    public function setIsPopular(bool $isPopular): Car
    {
        $this->isPopular = $isPopular;
        return $this;
    }

    public function getIsPopular(): bool
    {
        return $this->isPopular;
    }
}