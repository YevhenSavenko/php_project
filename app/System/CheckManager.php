<?php

namespace System;

class CheckManager
{
    public static function checkPOST(string $key)
    {
        if (isset($_POST[$key])) {
            foreach ($_POST as $key => $value) {
                if (empty(trim($_POST[$key]))) {
                    return ['status' => 'empty_fields'];
                }
            }
        }

        return 0;
    }

    public static function checkNumber(array $array)
    {
        foreach ($array as $value) {
            if (!is_numeric($value)) {
                return ['status' => 'no_number'];
            }
        }

        return 0;
    }
}
