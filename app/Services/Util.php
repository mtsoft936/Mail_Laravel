<?php

namespace App\Services;

use App\Models\Page;
use Illuminate\Support\Facades\DB;

class Util {
    public static function getTranslatedPage($page_id) {
        $page = Page::find($page_id);
        if ($page) {
            $lang = null;
            if (config('app.settings.lang') != app()->getLocale()) {
                $lang = app()->getLocale();
            }
            $translated = Page::where('slug', $page->slug)->where('lang', $lang)->first();
            if ($translated) {
                return $translated;
            }
            return $page;
        }
        return false;
    }

    public static function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }

    public static function translateModelAttribute($fields, $table, $name, $value) {
        $item = null;
        if (in_array($table, ['menus'])) {
            if ($fields->translations) {
                $translations = unserialize($fields->translations);
                if (isset($translations[app()->getLocale()]) && $translations[app()->getLocale()]) {
                    return $translations[app()->getLocale()];
                }
            }
        }
        if ($item) {
            return $item->{$name};
        }
        return $value;
    }
}
