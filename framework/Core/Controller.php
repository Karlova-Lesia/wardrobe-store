<?php

namespace App\Controllers;

use App\Config\Config;
use http\Exception\InvalidArgumentException;

class Controller
{
    protected function render(string $templateName): string
    {
        ob_start();
        $file = Config::getConfig()['templates']['path']."{$templateName}.php";

        if (!file_exists($file)) {
            throw new InvalidArgumentException("File don`t exist {$templateName}");
        }

        include $file;

        return ob_get_clean();
    }
}
