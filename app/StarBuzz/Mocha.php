<?php

namespace App\StarBuzz;

use App\StarBuzz\Coffees\Beverage;

class Mocha extends CondimentDecorator
{
    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.20;
    }

    public function getDescription(): string
    {
        return sprintf('%s, Mocha', $this->beverage->getBeverageDescription());
    }
}
