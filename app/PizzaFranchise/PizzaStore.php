<?php

namespace App\PizzaFranchise;

use App\PizzaFranchise\Enums\PizzaType;

abstract class PizzaStore
{
    public abstract function createPizza(PizzaType $type);

    public function orderPizza(PizzaType $type)
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
