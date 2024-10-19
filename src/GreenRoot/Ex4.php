<?php

namespace Telema\GreenRoot;

class Ex4
{
    public static function solution()
    {
        foreach (Customers::readCustomers() as $customer) {
            if ($customer['age'] < 10) {
                return 'Yes';
            }
        }
        return 'No';
    }

    public static function fpSolution()
    {
        return array_reduce(
            Customers::readCustomers(),
            fn ($message, $customer) => ($customer['age'] < 10 ? 'Yes' : 'No'),
            'No'
        );
    }
}
