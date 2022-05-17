<?php

namespace App\Services;

class Localization
{
    public static function get()
    {
        return session('curr_locale') ? session('curr_locale') : 'ru';
    }

    public static function set(string $locale)
    {
        $locale = in_array($locale, ['ru', 'en']) ? $locale : 'ru';
        session(['curr_locale' => $locale]);
        session()->save();

        return $locale;
    }

    public static function translate(string $key)
    {
        return trans($key, [], self::get());
    }
}
