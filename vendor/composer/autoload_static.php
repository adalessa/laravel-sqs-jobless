<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit332ec540daa9754d10eb9d907f06ee07
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nollaversio\\SQSJobless\\' => 23,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nollaversio\\SQSJobless\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit332ec540daa9754d10eb9d907f06ee07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit332ec540daa9754d10eb9d907f06ee07::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit332ec540daa9754d10eb9d907f06ee07::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}