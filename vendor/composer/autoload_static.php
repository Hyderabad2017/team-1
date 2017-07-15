<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e4f7863698164fd46369f0c96265b08
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e4f7863698164fd46369f0c96265b08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e4f7863698164fd46369f0c96265b08::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
