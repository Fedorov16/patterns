<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Observer;

use SplObserver;

class GameSubject implements \SplSubject
{
    /** @var array<SplObserver>  */
    private array $observers;
    private array $data;

    public function getData(): array
    {
        return $this->data;
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $key = array_search($observer, $this->observers, true);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function send(array $newData): void
    {
        $this->data = $newData;

        $this->notify();
    }
}
