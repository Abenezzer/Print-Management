<?php

namespace Core;

class Session {

    public static function get($name) {
        return $_SESSION[$name] ?? null;
    }

    public static function put($name, $value) {
        $_SESSION[$name] = $value;
    }

    public static function getFlashed($name) {
        return $_SESSION['__flashed'][$name] ?? null;
    }

    public static function putFlashed($name, $value) {
        $_SESSION['__flashed'][$name] = $value;
    }

    public static function unflash() {
        $_SESSION['__flashed'] = [];
        unset($_SESSION['__flashed']);
    }
}