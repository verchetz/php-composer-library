<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e9e31d49a360e93190ac6f69b16ba8d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Programmer\\Belajar\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Programmer\\Belajar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e9e31d49a360e93190ac6f69b16ba8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e9e31d49a360e93190ac6f69b16ba8d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e9e31d49a360e93190ac6f69b16ba8d::$classMap;

        }, null, ClassLoader::class);
    }
}
