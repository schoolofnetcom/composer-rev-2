<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1280c3fe766e3e4b141977ffc61a9d7
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
        'E' => 
        array (
            'Erikfig\\CursoSON\\' => 17,
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
        'Erikfig\\CursoSON\\' => 
        array (
            0 => __DIR__ . '/..' . '/erikfig/curso-composer-son/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1280c3fe766e3e4b141977ffc61a9d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1280c3fe766e3e4b141977ffc61a9d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
