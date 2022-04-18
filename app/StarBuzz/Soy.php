<?php

namespace App\StarBuzz;

use App\StarBuzz\Coffees\Beverage;

class Soy extends CondimentDecorator
{
    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.15;
    }

    public function getDescription(): string
    {
        return sprintf('%s, Soy', $this->beverage->getBeverageDescription());
    }
}
