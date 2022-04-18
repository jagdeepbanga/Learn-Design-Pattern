<?php

namespace App\StarBuzz\Coffees;

abstract class Beverage
{
    public string $description = 'Unknown Beverage';

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;
}
