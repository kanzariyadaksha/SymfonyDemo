<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb25ba265d466f3b8e5034d2c63d2a7ae
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mandrill' => 
            array (
                0 => __DIR__ . '/..' . '/mandrill/mandrill/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitb25ba265d466f3b8e5034d2c63d2a7ae::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}