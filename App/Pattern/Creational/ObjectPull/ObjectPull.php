<?php

declare(strict_types=1);

namespace App\Pattern\Creational\ObjectPull;

use App\Pattern\Creational\SingleTon\SingletonTrait;

class ObjectPull
{
    use SingletonTrait;

    private array $clone = [];
    private array $prototype = [];

    public function addObject(ObjectPullInterface $object): self
    {
        $objectKey = $this->getObjectKey($object);
        if (!in_array($objectKey, $this->prototype, true)) {
            $this->prototype[$objectKey] = $object;
        }

        return $this;
    }

    public function getObject(string $objectKey): ?ObjectPullInterface
    {
        if (isset($this->clone[$objectKey]) || !isset($this->prototype[$objectKey])) {
            return null;
        }

        $this->clone[$objectKey] = clone $this->prototype[$objectKey];

        return $this->clone[$objectKey];
    }

    public function getObjectKey(object|string $object): string
    {
        if (is_object($object)) {
            $key = get_class($object);
        } else {
            $key = $object;
        }

       return $key;
    }

    public function clear(ObjectPullInterface $object): void
    {
        $objectKey = $this->getObjectKey($object);
        if (!in_array($objectKey, $this->clone, true)) {
            unset($this->clone[$objectKey]);
        }
    }
}
