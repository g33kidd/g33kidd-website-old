<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    // Returns the key, if there is one, or returns the default value of null or the given.
    public static function get($key, $default = null)
    {
        if($key = self::has($key)) {
            return $key;
        } else {
            return $default;
        }
    }

    // Returns the first setting with the given key.
    public static function has($key)
    {
        return Setting::where('key', '=', $key)->first();
    }

}
