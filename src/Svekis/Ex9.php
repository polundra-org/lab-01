<?php

namespace Telema\Svekis;

class Ex9
{   
    const ITEMS = ['Apple', 'Banana', 'Cherry', 'Ananas'];

    public static function solution()
    {
        $html = '<ul>' . "\n";
        foreach (self::ITEMS as $fruit) {
            $html .= "\t" . '<li>' . $fruit . '</li>' . "\n";
        }
        $html .= '</ul>' . "\n";

        return $html;
    }
}
