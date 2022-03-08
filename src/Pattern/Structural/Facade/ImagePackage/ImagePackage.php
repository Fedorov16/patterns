<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Facade\ImagePackage;

class ImagePackage
{
    private string $image;

    public function uploadImage(string $file): void
    {
        $this->image = $file;
    }

    public function getImage(): string
    {
        return "Returned image $this->image";
    }

    public function editImage(string $path): void
    {
        $this->image = $path;
    }

    public function extraMethod1(): string
    {
        return __METHOD__;
    }

    public function extraMethod2(): string
    {
        return __METHOD__;
    }

    public function extraMethod3(): string
    {
        return __METHOD__;
    }
}
