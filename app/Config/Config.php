<?php

namespace App\Config;

class Config
{
    public static function getConfig(): array
    {
        return [
            'templates' => [
                'path' => '../templates/',
            ],
        ];
    }
}
