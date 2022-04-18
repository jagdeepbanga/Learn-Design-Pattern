<?php

namespace App\StarBuzz;

use App\StarBuzz\Enums\Size;

class Whip extends CondimentDecorator
{
    public function cost(): float
    {
        return match ($this->getSize()) {
            Size::SMALL => $this->beverage->cost() + 0.05,
            Size::MEDIUM => $this->beverage->cost() + 0.10,
            Size::LARGE => $this->beverage->cost() + 0.15,
        };
    }

    public function getDescription(): string
    {
        return sprintf('%s, Whip', $this->beverage->getDescription());
    }
}
