<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit037ad5bde9ed6f0213e9f0f3c4f7638f
{
    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit037ad5bde9ed6f0213e9f0f3c4f7638f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
