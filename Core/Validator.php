<?php

namespace Core;

class Validator
{
    public static function string($value, $min = 3, $max = 1000)
    {
        return strlen($value) >= $min && strlen($value) <= strlen($value);
    }

    public static function password($value, $min = 6, $max = 1000)
    {
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    public static function comfirmPassword($pass1, $pass2)
    {
        return $pass1 === $pass2;
    }
    public static function role($role) {
        return $role === 'Teacher' || $role === 'Approver' || $role === 'Admin';
    }
}
