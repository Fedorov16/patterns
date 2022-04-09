<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Visitor\Entity;

use App\Pattern\Behavioral\Visitor\VisitorInterface;

class Product implements VisitorEntityInterface
{
    private int $id;
    private int $code;
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function accept(VisitorInterface $visitor): string
    {
        return $visitor->visitProduct($this);
    }
}
