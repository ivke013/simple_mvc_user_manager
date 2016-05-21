<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef484c47f1b961ca64a071bfaeabf433
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Diwanee\\Model\\' => 14,
            'Diwanee\\Library\\' => 16,
            'Diwanee\\Controller\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Diwanee\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/model',
        ),
        'Diwanee\\Library\\' => 
        array (
            0 => __DIR__ . '/../..' . '/library',
        ),
        'Diwanee\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef484c47f1b961ca64a071bfaeabf433::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef484c47f1b961ca64a071bfaeabf433::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
