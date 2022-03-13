<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\Observer;

use SplSubject;

class Informator implements \SplObserver
{
    public function update(SplSubject $subject): void
    {
        $data = $subject->getData();
        if ($data['action'] === 'U') {
            dump('Informator send data');
        }
    }
}
