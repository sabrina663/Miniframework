<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit279a044066160f16d5542df6c38c9349
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit279a044066160f16d5542df6c38c9349::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit279a044066160f16d5542df6c38c9349::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit279a044066160f16d5542df6c38c9349::$classMap;

        }, null, ClassLoader::class);
    }
}
