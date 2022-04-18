<?php

namespace App\StarBuzz;

use App\StarBuzz\Enums\Size;

class Mocha extends CondimentDecorator
{
    public function cost(): float
    {
        return match ($this->getSize()) {
            Size::SMALL => $this->beverage->cost() + 0.15,
            Size::MEDIUM => $this->beverage->cost() + 0.20,
            Size::LARGE => $this->beverage->cost() + 0.25,
        };
    }

    public function getDescription(): string
    {
        return sprintf('%s, Mocha', $this->beverage->getDescription());
    }
}
