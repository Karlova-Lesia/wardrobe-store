<?php

namespace App\Config;

class Config
{
    public static function getConfig(): array
    {
        return [
            'templates' => [
                'path' => '../app/View/Templates/',
            ],
            'db' => [
                'host' => 'localhost',
                'dbname' => 'wardrobe',
                'user' => 'lesya',
                'password' => 'Password123#@!',
            ],

        ];
    }
}
