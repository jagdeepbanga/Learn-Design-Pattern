<?php

namespace App\StarBuzz\Coffees;

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = 'Espresso Coffee';
    }

    public function cost(): float
    {
        return 1.99;
    }
}
