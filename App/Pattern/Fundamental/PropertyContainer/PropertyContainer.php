<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\PropertyContainer;

class PropertyContainer implements PropertyInterface
{
    private array $properties = [];

    public function addProperty($name, $value): self
    {
        $this->properties[$name] = $value;
        return $this;
    }

    public function getProperty($name): ?string
    {
        return $this->properties[$name] ?? null;
    }

    public function setProperty($name, $value): self
    {
       $this->properties[$name] = $value;
        return $this;
    }

    public function deleteProperty($name): void
    {
        unset($this->properties[$name]);
    }
}
