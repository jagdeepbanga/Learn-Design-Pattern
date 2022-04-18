<?php

namespace App\StarBuzz\Coffees;

abstract class Beverage
{
    public string $description = 'Unknown Beverage';

    public function getBeverageDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;
}
