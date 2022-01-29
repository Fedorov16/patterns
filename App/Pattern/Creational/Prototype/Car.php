<?php

declare(strict_types=1);

namespace App\Pattern\Creational\Prototype;

use JetBrains\PhpStorm\Pure;

class Car
{
    private ?int $id;
    private int $model;
    private string $color;
    private \DateTime $releaseDate;
    private string $techName;

    public function __clone(): void
    {
        $this->id = null;
        $this->techName .= '_copy';
        $this->releaseDate = clone $this->releaseDate;
    }

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

    public function getTechName(): string
    {
        return $this->techName;
    }

    public function setTechName(string $techName): Car
    {
        $this->techName = $techName;
        return $this;
    }

    public function getReleaseDate(): \DateTime
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTime $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    #[Pure] public static function getFromDB(): self
    {
        $car = new self();
        $car->id = 1;
        $car->color = 'yellow';
        $car->techName = 'qwerty123';
        $car->model = 8;
        $car->releaseDate = new \DateTime('2022-06-20');
        return $car;
    }
}
