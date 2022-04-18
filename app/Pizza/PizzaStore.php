<?php

namespace App\Pizza;

use App\Pizza\Enums\PizzaType;
use App\Pizza\Factory\SimplePizzaFactory;

class PizzaStore
{
    private SimplePizzaFactory $factory;

    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    public function order(PizzaType $type)
    {
        $pizza = $this->factory->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
