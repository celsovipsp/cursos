<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfeebe5cef917cdee37ca809b149b4d96
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfeebe5cef917cdee37ca809b149b4d96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfeebe5cef917cdee37ca809b149b4d96::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}