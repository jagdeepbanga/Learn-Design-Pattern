<?php

namespace App\PizzaFranchise\Factory;

class ChicagoCheesePizza extends BasePizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Cheese Pizza';
    }

    public function cut(): self
    {
        printf('Cutting the pizza into square slices. ');

        return $this;
    }
}
