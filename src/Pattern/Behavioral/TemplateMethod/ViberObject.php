<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\TemplateMethod;

class ViberObject
{
    public function get(): string
    {
        return 'New message from ViberObject';
    }
}
