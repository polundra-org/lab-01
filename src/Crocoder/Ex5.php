<?php

namespace Telema\Crocoder;

const ITEMS = [
    [
        'name' => 'Vasiliy',
        'age' => 34
    ],
    [
        'name' => 'Jhon',
        'age' => 13
    ],
    [
        'name' => 'Mark',
        'age' => 56
    ],
    [
        'name' => 'Rachel',
        'age' => 45
    ],
    [
        'name' => 'Nate',
        'age' => 67
    ],
    [
        'name' => 'Jennifer',
        'age' => 65
    ]
];

class Ex5
{
    public static function solution(array $items = ITEMS)
    {
        $min = $items[0]['age'];
        $max = $items[0]['age'];

        foreach ($items as $item) {
            if ($item['age'] < $min) {
                $min = $item['age'];
            }

            if ($item['age'] > $max) {
                $max = $item['age'];
            }
        }
        return [$min, $max, $max - $min];
    }
}