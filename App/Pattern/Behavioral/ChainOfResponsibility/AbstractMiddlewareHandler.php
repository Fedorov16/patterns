<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\ChainOfResponsibility;

class AbstractMiddlewareHandler implements MiddlewareInterface
{
    private MiddlewareInterface $middleware;

    public function linkWith(MiddlewareInterface $handler): MiddlewareInterface
    {
        $this->middleware = $handler;

        return $handler;
    }

    public function check()
    {
        dump(get_class($this));
        if (!isset($this->middleware)) {
            dump('Chain is over');
            return true;
        }
        return $this->middleware->check();
    }
}
