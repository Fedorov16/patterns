<?php

declare(strict_types=1);

namespace App\Pattern\Structural\Facade\VideoPackage;

class VideoPackage
{
    private string $video;

    public function uploadVideo(string $file): void
    {
        $this->video = $file;
    }

    public function getVideo(): string
    {
        return "Returned video $this->video";
    }

    public function editVideo(string $path): void
    {
        $this->video = $path;
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
