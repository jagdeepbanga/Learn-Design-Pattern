<?php

namespace App\PizzaFranchise;

use App\PizzaFranchise\Enums\PizzaType;
use App\PizzaFranchise\Factory\ClamPizza;
use App\PizzaFranchise\Factory\NYCheesePizza;
use App\PizzaFranchise\Factory\PepperoniPizza;
use App\PizzaFranchise\Factory\VeggiePizza;

class NYStylePizzaStore extends PizzaStore
{
    /**
     * @param  PizzaType  $type
     * @return ClamPizza|NYCheesePizza|PepperoniPizza|VeggiePizza
     */
    public function createPizza(PizzaType $type)
    {
        return match ($type) {
            PizzaType::CHEESE => new NYCheesePizza(),
            PizzaType::PEPPERONI => new PepperoniPizza(),
            PizzaType::CLAM => new ClamPizza(),
            PizzaType::VEGGIE => new VeggiePizza()
        };
    }
}
