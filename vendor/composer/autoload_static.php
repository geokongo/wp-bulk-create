<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c6715966c1683a498c8b7edb3a3af5f
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Geokongo\\BulkCreate\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Geokongo\\BulkCreate\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c6715966c1683a498c8b7edb3a3af5f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c6715966c1683a498c8b7edb3a3af5f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c6715966c1683a498c8b7edb3a3af5f::$classMap;

        }, null, ClassLoader::class);
    }
}
