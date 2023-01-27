<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a258033a9771f29a4010a82f613f0c2
{
    public static $prefixLengthsPsr4 = array (
        'M' =>
        array (
            'Mustafa\\hello-world\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mustafa\\hello-world\\' =>
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a258033a9771f29a4010a82f613f0c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a258033a9771f29a4010a82f613f0c2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a258033a9771f29a4010a82f613f0c2::$classMap;

        }, null, ClassLoader::class);
    }
}
