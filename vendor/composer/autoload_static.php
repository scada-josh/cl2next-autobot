<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba94d60b29eeaa78269a79a1f96e98f0
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba94d60b29eeaa78269a79a1f96e98f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba94d60b29eeaa78269a79a1f96e98f0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
