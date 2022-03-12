<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Iterator;

use Traversable;

class GameIteratorAggregate implements \IteratorAggregate
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /** @link https://www.php.net/manual/ru/class.arrayiterator.php */
    public function getIterator(): Traversable
    {
        dump('Factory method');
//        return new GameIterator($this->data);
        return new \ArrayIterator($this->data);
    }
}