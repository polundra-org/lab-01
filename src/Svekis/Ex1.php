<?php

namespace Telema\Svekis;

class Ex1
{  
    const ITEMS = [3, 56, 23, 4, 1, 67, 5];

    public static function solution()
    {
        $doubledNumbers = [];
        foreach (self::ITEMS as $number) {
            $doubledNumbers[] = $number * 2;
        }
        return $doubledNumbers;
    }
}
