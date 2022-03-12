<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Iterator;

use Traversable;

class DirectoryIterator implements \IteratorAggregate
{
    private string $dir;

    public function __construct(string $dir)
    {
        $this->dir = $dir;
    }

    public function getIterator(): Traversable
    {
        return new \DirectoryIterator($this->dir);
    }
}