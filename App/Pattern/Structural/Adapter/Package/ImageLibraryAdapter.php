<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Adapter\Package;

class ImageLibraryAdapter implements ImageLibraryInterface
{
    private ImageLibraryThirdPartyInterface $imageLibraryPackage;

    public function __construct()
    {
        $this->imageLibraryPackage = new ImageLibraryThirdParty();
    }

    public function upload(string $path): string
    {
        return $this->imageLibraryPackage->uploadImage($path);
    }

    public function get(string $fileCode): string
    {
        return $this->imageLibraryPackage->getImage($fileCode);
    }
}
