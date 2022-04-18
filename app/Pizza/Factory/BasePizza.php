<?php

namespace App\Pizza\Factory;

abstract class BasePizza
{
    public function prepare(): self
    {
        return $this;
    }

    public function bake(): self
    {
        return $this;
    }

    public function cut(): self
    {
        return $this;
    }

    public function box(): self
    {
        return $this;
    }
}
