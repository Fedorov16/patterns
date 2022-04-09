<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Visitor\Entity;

use App\Pattern\Behavioral\Visitor\VisitorInterface;

class Material implements VisitorEntityInterface
{
    private int $id;
    private string $iconName;
    private float $price;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIconName(): string
    {
        return $this->iconName;
    }

    public function setIconName(string $iconName): self
    {
        $this->iconName = $iconName;

        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function accept(VisitorInterface $visitor): string
    {
        return $visitor->visitMaterial($this);
    }
}
