<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad74256b7ccd7bc1dd6197711bbc280e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MetzWeb\\Instagram\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MetzWeb\\Instagram\\' => 
        array (
            0 => __DIR__ . '/..' . '/cosenary/instagram/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad74256b7ccd7bc1dd6197711bbc280e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad74256b7ccd7bc1dd6197711bbc280e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
