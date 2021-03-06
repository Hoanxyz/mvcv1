<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita03258e9c371bb5f66b0e12f98c8938e
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'URL\\' => 4,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\' => 12,
            'Config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'URL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/URL',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita03258e9c371bb5f66b0e12f98c8938e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita03258e9c371bb5f66b0e12f98c8938e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
