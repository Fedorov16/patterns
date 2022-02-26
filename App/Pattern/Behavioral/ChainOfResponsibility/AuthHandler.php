<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\ChainOfResponsibility;

class AuthHandler extends AbstractMiddlewareHandler
{
    public function check()
    {
        dump('User was Auth');

        return parent::check();
    }
}
