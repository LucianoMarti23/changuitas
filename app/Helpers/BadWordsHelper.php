<?php

namespace App\Helpers;

class BadWordsHelper
{
    protected static $badWords = [
        'puta', 'mierda', 'cabrón', 'joder', 'gilipollas', 'maricón', 'estúpido', 'idiota','puto','tonto','pija','pene',

    ];

    public static function containsBadWords(string $text): bool
    {
        foreach (self::$badWords as $word) {
            if (stripos($text, $word) !== false) {
                return true;
            }
        }
        return false;
    }
}
