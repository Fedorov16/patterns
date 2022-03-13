<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Observer;

use SplSubject;

class LoggerObserver implements \SplObserver
{
    public function update(SplSubject $subject): void
    {
        dump($subject->getData());
    }
}
