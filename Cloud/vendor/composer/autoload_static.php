<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite185dc5fd6afd4e985a43559823ab327
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chriskacerguis\\RestServer\\' => 26,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chriskacerguis\\RestServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite185dc5fd6afd4e985a43559823ab327::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite185dc5fd6afd4e985a43559823ab327::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite185dc5fd6afd4e985a43559823ab327::$classMap;

        }, null, ClassLoader::class);
    }
}