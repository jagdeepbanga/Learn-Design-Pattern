<?php

namespace App\StarBuzz;

use App\StarBuzz\Coffees\Beverage;

class SteamedMilk extends CondimentDecorator
{
    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.10;
    }

    public function getDescription(): string
    {
        return sprintf('%s, Steam Milk', $this->beverage->getDescription());
    }
}
