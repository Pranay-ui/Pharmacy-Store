<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2de916e207e873bf8dd4c1dd6922616
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2de916e207e873bf8dd4c1dd6922616::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2de916e207e873bf8dd4c1dd6922616::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
