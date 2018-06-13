<?php

namespace App\Traits;

trait MacrableTrait
{
    private static $callbacks = [];

    public static function registerMacros($name, $callback)
    {
        self::$callbacks[$name] = $callback;
    }

    public static function __callStatic($name, $arguments)
    {
        if (isset(self::$callbacks[$name])) {
            return \call_user_func_array(self::$callbacks[$name], $arguments);
        }
    }
}
