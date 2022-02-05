<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Adapter\Package;

class ImageLibraryThirdParty implements ImageLibraryThirdPartyInterface
{
    public function uploadImage(string $path): string
    {
        return __METHOD__;
    }

    public function getImage(string $fileCode): string
    {
        return __METHOD__;
    }
}
