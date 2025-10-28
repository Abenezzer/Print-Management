<?php

namespace Core;

use Exception;

class Container {

    protected static $binds = [];

    public static function bind($name, $fn) {
        self::$binds[$name] = $fn;
    }

    public static function resolve($name) {
        if(array_key_exists($name, self::$binds)) {

            return call_user_func(self::$binds[$name]);

        }

        return new Exception("Unkown Binding called $name");
    }
}