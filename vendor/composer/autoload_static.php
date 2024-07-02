<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf49571ee7d7213352c9df3475acf63ca
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pigs\\BaseCore\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pigs\\BaseCore\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf49571ee7d7213352c9df3475acf63ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf49571ee7d7213352c9df3475acf63ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf49571ee7d7213352c9df3475acf63ca::$classMap;

        }, null, ClassLoader::class);
    }
}