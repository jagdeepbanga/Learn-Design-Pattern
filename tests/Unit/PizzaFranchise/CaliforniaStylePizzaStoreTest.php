<?php

namespace Tests\Unit\PizzaFranchise;

use App\PizzaFranchise\CaliforniaStylePizzaStore;
use App\PizzaFranchise\Enums\PizzaType;
use App\PizzaFranchise\Factory\CaliforniaCheesePizza;
use Tests\TestCase;

class CaliforniaStylePizzaStoreTest extends TestCase
{
    /** @test */
    public function can_bake_chicago_style_cheese_pizza(): void
    {
        $pizza = (new CaliforniaStylePizzaStore())->orderPizza(PizzaType::CHEESE);

        $this->assertInstanceOf(CaliforniaCheesePizza::class, $pizza);

        $this->expectOutputString('Preparing California Style Cheese Pizza. Bake for 25 minutes for 350". Cutting the pizza into diagonal slices. Place pizza in box. ');
    }
}
