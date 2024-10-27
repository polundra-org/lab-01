<?php

namespace Telema\Crocoder;

const ITEMS = 'George Raymond Richard Martin';

class Ex4
{
    public static function solution(string $nameString = ITEMS)
    {
        $names = explode(' ', $nameString);

        $initials = [];
        foreach ($names as $name) {
            $initial = $name[0];
            $initials[] = $initial;
        }

        return implode('', $initials);
    }
}
