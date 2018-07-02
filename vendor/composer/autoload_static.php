<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite32ebee3f6b8cae2eac29b704ee821f7
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite32ebee3f6b8cae2eac29b704ee821f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite32ebee3f6b8cae2eac29b704ee821f7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
