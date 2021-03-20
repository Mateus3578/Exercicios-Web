<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc13a5d3080a089d3f7b93ae2d9a273f5
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc13a5d3080a089d3f7b93ae2d9a273f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc13a5d3080a089d3f7b93ae2d9a273f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc13a5d3080a089d3f7b93ae2d9a273f5::$classMap;

        }, null, ClassLoader::class);
    }
}
