<?php

namespace App\StarBuzz;

use App\StarBuzz\Coffees\Beverage;

abstract class CondimentDecorator extends Beverage
{
    public abstract function getDescription(): string;
}
