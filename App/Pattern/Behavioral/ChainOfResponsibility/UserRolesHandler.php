<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\ChainOfResponsibility;

class UserRolesHandler extends AbstractMiddlewareHandler
{
    public function check()
    {
        dump('User has roles');

        return parent::check();
    }
}
