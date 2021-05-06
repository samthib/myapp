<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc3739ea39b89b49bdac2c345ef531a1
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\BlogController' => __DIR__ . '/../..' . '/app/Controllers/BlogController.php',
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Controllers/Controller.php',
        'App\\Models\\Model' => __DIR__ . '/../..' . '/app/Models/Model.php',
        'App\\Models\\Post' => __DIR__ . '/../..' . '/app/Models/Post.php',
        'App\\Models\\Tag' => __DIR__ . '/../..' . '/app/Models/Tag.php',
        'Database\\DBConnection' => __DIR__ . '/../..' . '/database/DBConnection.php',
        'Router\\Route' => __DIR__ . '/../..' . '/routes/Route.php',
        'Router\\Router' => __DIR__ . '/../..' . '/routes/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc3739ea39b89b49bdac2c345ef531a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc3739ea39b89b49bdac2c345ef531a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbc3739ea39b89b49bdac2c345ef531a1::$classMap;

        }, null, ClassLoader::class);
    }
}
