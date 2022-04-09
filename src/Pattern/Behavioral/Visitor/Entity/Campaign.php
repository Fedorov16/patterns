<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Visitor\Entity;

use App\Pattern\Behavioral\Visitor\VisitorInterface;

class Campaign implements VisitorEntityInterface
{
    private int $id;
    private string $title;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function accept(VisitorInterface $visitor): string
    {
        return $visitor->visitCampaign($this);
    }
}
