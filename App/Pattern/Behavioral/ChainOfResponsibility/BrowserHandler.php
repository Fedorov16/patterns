<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\ChainOfResponsibility;

class BrowserHandler extends AbstractMiddlewareHandler
{
    public function check()
    {
        dump('User is not a bot');

        return parent::check();
    }
}
