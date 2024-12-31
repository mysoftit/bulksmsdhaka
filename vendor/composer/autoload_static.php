<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72bf5a151ef1721a6e9424f2334ee439
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mysoftit\\Bulksmsdhaka\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mysoftit\\Bulksmsdhaka\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit72bf5a151ef1721a6e9424f2334ee439::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit72bf5a151ef1721a6e9424f2334ee439::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit72bf5a151ef1721a6e9424f2334ee439::$classMap;

        }, null, ClassLoader::class);
    }
}
