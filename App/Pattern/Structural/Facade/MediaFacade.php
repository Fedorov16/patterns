<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Facade;

use App\Pattern\Structural\Facade\ImagePackage\ImagePackage;
use App\Pattern\Structural\Facade\VideoPackage\VideoPackage;

class MediaFacade
{
    private ImagePackage $imagePackage;
    private VideoPackage $videoPackage;

    public function getImage(): string
    {
        return $this->imagePackage->getImage();
    }

    public function getVideo(): string
    {
        return $this->videoPackage->getVideo();
    }

    public function uploadImage(string $file): void
    {
        $this->imagePackage = new ImagePackage();
        $this->imagePackage->uploadImage($file);
    }

    public function uploadVideo(string $file): void
    {
        $this->videoPackage = new VideoPackage();
        $this->videoPackage->uploadVideo($file);
    }

    public function editImage(string $file): void
    {
        $this->imagePackage->editImage($file);
    }
}
