<?php

namespace Tests\Unit\Pizza;

use App\Pizza\Enums\PizzaType;
use App\Pizza\Factory\CheesePizza;
use App\Pizza\Factory\SimplePizzaFactory;
use App\Pizza\PizzaStore;
use Tests\TestCase;

class PizzaStoreTest extends TestCase
{
    /** @test */
    public function can_bake_cheese_pizza(): void
    {
        $pizzaStore = new PizzaStore(new SimplePizzaFactory());
        $pizza = $pizzaStore->order(PizzaType::CHEESE);

        $this->assertInstanceOf(CheesePizza::class, $pizza);
    }
}
