<?php

declare(strict_types=1);

namespace App\Controller;

class InfoRender
{
    public static function showInfo($name, $link = null): void
    {
        echo "<h2>$name <a href=$link target='_blank'>read more</a></h2>";
    }

    public static function showArticle(string $article): void
    {
        echo "<p>$article</p>";
    }
}
