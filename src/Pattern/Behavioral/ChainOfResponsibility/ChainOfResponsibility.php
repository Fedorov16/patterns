<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\ChainOfResponsibility;

class ChainOfResponsibility
{
    public static function run(): void
    {
        dump('Creating of chain');
        $middleWar = new AuthHandler();
        $middleWar
            ->linkWith(new UserRolesHandler())
            ->linkWith(new BrowserHandler())
            ->linkWith(new TimeHandler());

        dump($middleWar);
        $middleWar->check();
    }
}
