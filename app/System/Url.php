<?php

namespace System;

use Core\Route;

class Url
{
    public static function getLink($path, $name, $class = '', $params = [])
    {
        if (!empty($params)) {
            $firts_key = array_keys($params)[0];
            foreach ($params as $key => $value) {
                $path .= ($key === $firts_key ? '?' : '&');
                $path .= "$key=$value";
            }
        }

        $href = !empty($class) ? "<a class=\"{$class}\" href=\"" : '<a href="';

        return $href . Route::getBasePath() . $path . '">' . $name . '</a>';
    }
}
