<?php

namespace System;

class Redirect
{
    public static function redirectPage(string $path)
    {
        header("Location: {$path}");
        exit;
    }
}
