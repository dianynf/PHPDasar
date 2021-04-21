<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit240efd9feeccf9253704bd6732f32611
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit240efd9feeccf9253704bd6732f32611::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit240efd9feeccf9253704bd6732f32611::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit240efd9feeccf9253704bd6732f32611::$classMap;

        }, null, ClassLoader::class);
    }
}