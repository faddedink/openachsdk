<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94be9fd5d63e3f075a4d3fc6932b96d7
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        'aa75ea0761a2f40c1f3b32ad314f86c4' => __DIR__ . '/..' . '/phpseclib/mcrypt_compat/lib/mcrypt.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'c' => 
        array (
            'cweagans\\Composer\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'cweagans\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/cweagans/composer-patches/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'config' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
    );

    public static $classMap = array (
        'Yii' => __DIR__ . '/..' . '/yiisoft/yii/framework/yii.php',
        'YiiBase' => __DIR__ . '/..' . '/yiisoft/yii/framework/YiiBase.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94be9fd5d63e3f075a4d3fc6932b96d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94be9fd5d63e3f075a4d3fc6932b96d7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit94be9fd5d63e3f075a4d3fc6932b96d7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit94be9fd5d63e3f075a4d3fc6932b96d7::$classMap;

        }, null, ClassLoader::class);
    }
}