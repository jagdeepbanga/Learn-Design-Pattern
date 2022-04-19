<?php

namespace App\PizzaFranchise\Factory;

abstract class BasePizza
{
    public string $name;

    public function prepare(): self
    {
        printf('Preparing %s. ', $this->name);

        return $this;
    }

    public function bake(): self
    {
        printf('Bake for 25 minutes for 350". ');

        return $this;
    }

    public function cut(): self
    {
        printf('Cutting the pizza into diagonal slices. ');

        return $this;
    }

    public function box(): self
    {
        printf('Place pizza in box. ');

        return $this;
    }
}
