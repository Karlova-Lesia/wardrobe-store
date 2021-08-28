<?php

namespace App\Config;

class Config
{
    public static function getConfig(): array
    {
        return include '../app/Config/configs.php';
    }
}
