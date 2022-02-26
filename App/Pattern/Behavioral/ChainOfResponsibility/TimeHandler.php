<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\ChainOfResponsibility;

class TimeHandler extends AbstractMiddlewareHandler
{
    public function check()
    {
        dump('Is Not Curfew');

        return parent::check();
    }
}
