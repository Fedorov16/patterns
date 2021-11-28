<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\PropertyContainer;

interface PropertyInterface
{
    public function addProperty($name, $value): self;
    public function getProperty($name): ?string;
    public function setProperty($name, $value): self;
    public function deleteProperty($name): void;
}
