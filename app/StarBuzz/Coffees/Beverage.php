<?php

namespace App\StarBuzz\Coffees;

use App\StarBuzz\Enums\Size;

abstract class Beverage
{
    public string $description = 'Unknown Beverage';
    public Size $size = Size::MEDIUM;

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;

    public function setSize(Size $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): Size
    {
        return $this->size;
    }
}
