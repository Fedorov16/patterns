<?php

declare(strict_types=1);

namespace App\Principle\Solid\OpenClosed\Logger;

use function dump;

class DbLogger
{
    public function logToDb(string $productName): void
    {
        dump(sprintf('I log product %s to file', $productName));
    }
}
