<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Adapter\Package;

class ImageLibrary implements ImageLibraryInterface
{
    public function upload(string $path): string
    {
        return(__METHOD__);
    }

    public function get(string $fileCode): string
    {
        return(__METHOD__);
    }
}
