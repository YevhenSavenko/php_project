<?php

namespace Core;

class Route
{
    public static function getBasePath()
    {
        $base_path = substr(ROOT, strlen($_SERVER['DOCUMENT_ROOT']));
        return $base_path;
    }
}
