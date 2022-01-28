<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Yaml\Yaml;

class HeaderMenu
{
    private const YAML_PATH = '/../config/headerMenu.yml';

    public static function render(): void
    {
        $result = ['<div style="display: flex">'];

        $yaml = Yaml::parseFile(__DIR__ . self::YAML_PATH);

        foreach ($yaml as $header => $data) {
            $result[] = "<ul> <strong>$header</strong>";
            foreach ($data as $path => $name) {
                $result[] = "<li><a href='/$path'>$name</a></li>";
            }
            $result[] ='</ul>';
        }
        $result[] ='</div>';
        echo implode('', $result);
    }
}
