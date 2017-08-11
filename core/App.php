<?php 

namespace App\Core;

class App
{
    protected static $school = [];

    public static function bind($key,$value)
    {
        static::$school[$key] = $value;
    }
    public static function get($key)
    {
        if(! array_key_exists($key, static::$school))
        {
            throw new Exception("Method {$key} doesn't exist");            
        }

        return static::$school[$key];
    }
}