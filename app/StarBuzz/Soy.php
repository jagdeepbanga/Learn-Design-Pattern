<?php

namespace App\StarBuzz;

use App\StarBuzz\Enums\Size;

class Soy extends CondimentDecorator
{
    public function cost(): float
    {
        return match ($this->getSize()) {
            Size::SMALL => $this->beverage->cost() + 0.10,
            Size::MEDIUM => $this->beverage->cost() + 0.15,
            Size::LARGE => $this->beverage->cost() + 0.20,
        };
    }

    public function getDescription(): string
    {
        return sprintf('%s, Soy', $this->beverage->getDescription());
    }
}
