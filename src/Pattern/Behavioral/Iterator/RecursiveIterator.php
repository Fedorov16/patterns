<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Iterator;

use Traversable;

class RecursiveIterator implements \IteratorAggregate
{
    private array $arr;

    public function __construct(array $arr)
    {
        $this->arr = $arr;
    }

    public function getIterator(): Traversable
    {
        return new \RecursiveArrayIterator($this->arr);
    }
}