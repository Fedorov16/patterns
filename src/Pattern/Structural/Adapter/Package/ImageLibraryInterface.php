<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Adapter\Package;

interface ImageLibraryInterface
{
    public function upload(string $path): string;
    public function get(string $fileCode): string;
}
