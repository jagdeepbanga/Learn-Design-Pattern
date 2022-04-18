<?php

namespace App\Pizza;

use App\Pizza\Enums\PizzaType;
use App\Pizza\Factory\SimplePizzaFactory;

class OrderPizza
{
    public function order(PizzaType $type)
    {
        $pizza = (new SimplePizzaFactory())->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
