<?php

class Autoloader
{
    public static function load()
    {
        spl_autoload_register(function ($className) {
            $classPath = sprintf("%s/app/%s.php", ROOT, str_replace('\\', '/', $className));
            if (file_exists($classPath)) {
                require $classPath;
                return 1;
            }
            return 0;
        });
    }
}
