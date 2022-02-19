<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithBridge;

abstract class ImageAbstract
{
    public function __construct(
        private readonly RealizationInterface $realization
    ) {}

    abstract public function run();

    public function getRealization(): RealizationInterface
    {
        return $this->realization;
    }

    public function doCommonLogic(): void
    {
        dump(sprintf(
            'Class %s, ShadowColor: %s, Size: %d',
            get_class($this),
            $this->realization->getShadowColor(),
            $this->realization->getSize()
        ));
    }
}
