<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Iterator;

class GameIterator implements \Iterator
{
    private int $position = 0;
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function current(): mixed
    {
        dump(__METHOD__);
        return $this->data[$this->position];
    }

    public function next(): void
    {
        dump(__METHOD__);
        ++$this->position;
    }

    public function key(): int
    {
        dump(__METHOD__);
        return $this->position;
    }

    public function valid(): bool
    {
        dump(__METHOD__);
//        dump($this->data, $this->position);
//        dump($this->data[$this->position]);
       return isset($this->data[$this->position]);
    }

    public function rewind(): void
    {
        dump(__METHOD__);
        $this->position = 0;
    }
}