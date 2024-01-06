<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitced562d6c0f7e2cdd2f88dddfde1d6dc
{
    public static $files = array (
        '9d216ca19f8baa1b053aa8c7c1172e15' => __DIR__ . '/../..' . '/Libs/License/manager.php',
        'd5084d2cb7ff84787a2db3401760368b' => __DIR__ . '/../..' . '/Inc/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'COPYTOCLIPBOARD\\Libs\\License\\' => 29,
            'COPYTOCLIPBOARD\\Libs\\' => 21,
            'COPYTOCLIPBOARD\\Inc\\Admin\\' => 26,
            'COPYTOCLIPBOARD\\Inc\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'COPYTOCLIPBOARD\\Libs\\License\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Libs/License',
        ),
        'COPYTOCLIPBOARD\\Libs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Libs',
        ),
        'COPYTOCLIPBOARD\\Inc\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Inc/Admin',
        ),
        'COPYTOCLIPBOARD\\Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitced562d6c0f7e2cdd2f88dddfde1d6dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitced562d6c0f7e2cdd2f88dddfde1d6dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitced562d6c0f7e2cdd2f88dddfde1d6dc::$classMap;

        }, null, ClassLoader::class);
    }
}
