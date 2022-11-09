<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2384807cd1de794468703a656be39d5a
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KiamaneshReza\\LaravelUsersActivityLog\\' => 38,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KiamaneshReza\\LaravelUsersActivityLog\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2384807cd1de794468703a656be39d5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2384807cd1de794468703a656be39d5a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2384807cd1de794468703a656be39d5a::$classMap;

        }, null, ClassLoader::class);
    }
}
