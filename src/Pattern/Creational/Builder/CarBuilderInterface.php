<?php

declare(strict_types=1);

namespace App\Pattern\Creational\Builder;

interface CarBuilderInterface
{
    public function create(): void;

    public function setModelNumber(int $model): self;
    public function setColor(string $color): self;
    public function setEngine(string $engine): self;
    public function setExtraData(array $extraData): self;
    public function setIsPopular(bool $isPopular): self;

    public function get(): Car;
}
