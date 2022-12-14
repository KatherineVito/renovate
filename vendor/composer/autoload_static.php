<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit117efe4e7b049a387819d81e837ee1e1
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit117efe4e7b049a387819d81e837ee1e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit117efe4e7b049a387819d81e837ee1e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit117efe4e7b049a387819d81e837ee1e1::$classMap;

        }, null, ClassLoader::class);
    }
}
