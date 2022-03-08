<?php

declare(strict_types=1);

namespace App\Command;

class TestSummator
{
    private array $params;

    public function __construct(array $params)
    {
        $this->params = $params;
        $this->checkParams();
    }

    public function execute(): int
    {
        echo $this->getParam('a') + $this->getParam('b') . "\n";
        return 0;
    }

    private function checkParams(): void
    {
        $this->ensureParamExists('a');
        $this->ensureParamExists('b');
    }

    private function getParam(string $paramName)
    {
        return $this->params[$paramName] ?? null;
    }

    private function ensureParamExists(string $paramName): void
    {
        if (!isset($this->params[$paramName])) {
            throw new \Exception("Param with name $paramName is not set! \n");
        }
    }
}
