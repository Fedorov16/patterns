<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Visitor\Entity;

use App\Pattern\Behavioral\Visitor\VisitorInterface;

interface VisitorEntityInterface
{
    public function accept(VisitorInterface $visitor): string;
}
