<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Bridge\WithNoBridge;

use App\Pattern\Structural\Bridge\Formats\ImageInterface;

abstract class ImageAbstract
{
    public function __construct(
        protected readonly ImageInterface $image,
    ) {}

    abstract public function run();

    public function doCommonLogic(): void
    {
        dump(sprintf(
            'Class %s, ShadowColor: %s, Size: %d',
            get_class($this),
            $this->image->getShadowColor(),
            $this->image->getSize()
        ));
    }
}
