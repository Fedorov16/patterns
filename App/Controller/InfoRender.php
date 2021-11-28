<?php

namespace App\Controller;

class InfoRender
{
    public static function showInfo($name, $link = null): void
    {
        echo "<h2>$name <a href=$link>read more</a></h2>";
    }
}
