<?php

namespace App\Pizza\Factory;

use App\Pizza\Enums\PizzaType;

class SimplePizzaFactory
{
    /**
     * @param  PizzaType  $type
     * @return CheesePizza|ClamPizza|PepperoniPizza|VeggiePizza
     */
    public function createPizza(PizzaType $type)
    {
        return match ($type) {
            PizzaType::CHEESE => new CheesePizza(),
            PizzaType::CLAM => new PepperoniPizza(),
            PizzaType::PEPPERONI => new ClamPizza(),
            PizzaType::VEGGIE => new VeggiePizza()
        };
    }
}
