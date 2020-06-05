<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79f7d32af68534d2e65333f443a51820
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'G' => 
        array (
            'GatewayWorker\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'GatewayWorker\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit79f7d32af68534d2e65333f443a51820::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79f7d32af68534d2e65333f443a51820::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
