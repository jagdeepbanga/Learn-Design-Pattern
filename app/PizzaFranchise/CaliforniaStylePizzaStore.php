<?php

namespace App\PizzaFranchise;

use App\PizzaFranchise\Enums\PizzaType;
use App\PizzaFranchise\Factory\CaliforniaCheesePizza;
use App\PizzaFranchise\Factory\ClamPizza;
use App\PizzaFranchise\Factory\PepperoniPizza;
use App\PizzaFranchise\Factory\VeggiePizza;

class CaliforniaStylePizzaStore extends PizzaStore
{
    public function createPizza(PizzaType $type)
    {
        return match ($type) {
            PizzaType::CHEESE => new CaliforniaCheesePizza(),
            PizzaType::PEPPERONI => new PepperoniPizza(),
            PizzaType::CLAM => new ClamPizza(),
            PizzaType::VEGGIE => new VeggiePizza()
        };
    }
}
