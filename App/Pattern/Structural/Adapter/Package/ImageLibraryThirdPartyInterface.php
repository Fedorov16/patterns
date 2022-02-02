<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Adapter\Package;

interface ImageLibraryThirdPartyInterface
{
    public function uploadImage(string $path): string;
    public function getImage(string $fileCode): string;
}
