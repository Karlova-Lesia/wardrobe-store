<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb824cdf73bd022996776703db561ebe8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb824cdf73bd022996776703db561ebe8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb824cdf73bd022996776703db561ebe8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb824cdf73bd022996776703db561ebe8::$classMap;

        }, null, ClassLoader::class);
    }
}
