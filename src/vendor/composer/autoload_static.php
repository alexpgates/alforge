<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bb8b4875601cf786cabb2ae8c480d87
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alfred\\Workflows\\' => 17,
            'AlForge\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alfred\\Workflows\\' => 
        array (
            0 => __DIR__ . '/..' . '/joetannenbaum/alfred-workflow/src',
        ),
        'AlForge\\' => 
        array (
            0 => __DIR__ . '/../..' . '/alforge',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bb8b4875601cf786cabb2ae8c480d87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bb8b4875601cf786cabb2ae8c480d87::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
