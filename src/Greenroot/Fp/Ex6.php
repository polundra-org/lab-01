<?php

namespace Telema\Greenroot\Fp;

use Telema\Customer;
use Telema\Greenroot\Traits\Customers;

class Ex6
{
    use Customers;

    public function __invoke()
    {
        return array_filter(
            $this->readCustomers(),
            fn ($c) => $c->hasPurchased()
        );
    }
}
