<?php

declare(strict_types=1);

namespace App\Command;

abstract class AbstractCommand
{
    private array $params;

    public function __construct(array $params)
    {
        $this->params = $params;
        $this->checkParams();
    }

    abstract public function execute();

    abstract protected function checkParams();

    protected function getParam(string $paramName)
    {
        return $this->params[$paramName] ?? null;
    }

    protected function ensureParamExists(string $paramName): void
    {
        if (!isset($this->params[$paramName])) {
            throw new \Exception("Param with name $paramName is not set! \n");
        }
    }
}
