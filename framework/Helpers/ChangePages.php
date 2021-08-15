<?php

namespace Framework\Helpers;

use App\Config\Config;
use http\Exception\InvalidArgumentException;

class ChangePages
{
    public static function render(string $templateName): string
    {
        ob_start();
        $file = Config::getConfig()['templates']['path']."{$templateName}.php";

        if (!file_exists($file)) {
            throw new InvalidArgumentException("File don`t exist {$templateName}");
        }

        include $file;

        return ob_get_clean();
    }

    public static function redirect(string $url): void
    {
        ob_start();
        header("Location: {$url}");
        ob_end_flush();
    }
}
