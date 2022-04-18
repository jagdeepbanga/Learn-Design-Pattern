<?php

namespace App\StarBuzz;

use App\StarBuzz\Coffees\Beverage;
use App\StarBuzz\Enums\Size;

abstract class CondimentDecorator extends Beverage
{
    public Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getSize(): Size
    {
        return $this->beverage->getSize();
    }
}
