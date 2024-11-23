<?php
class Autoloader
{
    public static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {
        $file = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
        if (file_exists($file)) {
            include $file;
        }
    }
}