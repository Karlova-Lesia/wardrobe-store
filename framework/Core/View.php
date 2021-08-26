<?php

namespace Framework\Core;

use App\Config\Config;
use Exception;

class View
{
    public static function render(string $templateName, array $vars): string
    {
        ob_start(null, 0, PHP_OUTPUT_HANDLER_CLEANABLE ^ PHP_OUTPUT_HANDLER_REMOVABLE);
        extract($vars);

        try {
            $file = Config::getConfig()['templates']['path'] . "{$templateName}.php";
            if (!file_exists($file)) {
                throw new Exception("Configuration file not found.");
            }
            include $file;
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return ob_get_clean();
    }
}
