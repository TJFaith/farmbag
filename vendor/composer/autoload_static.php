<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08051fa0f4e37876c9cbe8e7f7aa5fa1
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '0d59ee240a4cd96ddbb4ff164fccea4d' => __DIR__ . '/..' . '/symfony/polyfill-php73/bootstrap.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'voku\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php73\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Container\\' => 14,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'D' => 
        array (
            'Doctrine\\Inflector\\' => 19,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'voku\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/portable-ascii/src/voku',
        ),
        'Symfony\\Polyfill\\Php73\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php73',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Doctrine\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Inflector',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $classMap = array (
        'JsonException' => __DIR__ . '/..' . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
        'Models\\Client' => __DIR__ . '/../..' . '/controller/Models/Client.php',
        'Models\\Product' => __DIR__ . '/../..' . '/controller/Models/Product.php',
        'Models\\Product_category' => __DIR__ . '/../..' . '/controller/Models/Product_category.php',
        'Models\\Sold_Product' => __DIR__ . '/../..' . '/controller/Models/Sold_Product.php',
        'Models\\User' => __DIR__ . '/../..' . '/controller/Models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08051fa0f4e37876c9cbe8e7f7aa5fa1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08051fa0f4e37876c9cbe8e7f7aa5fa1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit08051fa0f4e37876c9cbe8e7f7aa5fa1::$classMap;

        }, null, ClassLoader::class);
    }
}
