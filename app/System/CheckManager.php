<?php

namespace System;

class CheckManager
{
    public static function checkPOST($key)
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
}
