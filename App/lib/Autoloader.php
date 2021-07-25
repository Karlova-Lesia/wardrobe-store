<?php
namespace App\lib;

class Autoloader
{
    public static function  autoload(string $className): void
    {
        $path = str_replace('\\', '/', $className . '.php');
        if (file_exists($path)) {
            require_once ($path);
        }
        spl_autoload_register(['App\lib\Autoloader', 'autoload']);
    }
}
