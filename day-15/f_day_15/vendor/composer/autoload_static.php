<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7d62502d50208fec18f43d125c9c999
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7d62502d50208fec18f43d125c9c999::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7d62502d50208fec18f43d125c9c999::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc7d62502d50208fec18f43d125c9c999::$classMap;

        }, null, ClassLoader::class);
    }
}
