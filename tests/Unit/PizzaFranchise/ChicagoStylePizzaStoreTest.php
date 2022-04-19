<?php

namespace Tests\Unit\PizzaFranchise;

use App\PizzaFranchise\ChicagoStylePizzaStore;
use App\PizzaFranchise\Enums\PizzaType;
use App\PizzaFranchise\Factory\ChicagoCheesePizza;
use Tests\TestCase;

class ChicagoStylePizzaStoreTest extends TestCase
{
    /** @test */
    public function can_bake_chicago_style_cheese_pizza(): void
    {
        $pizza = (new ChicagoStylePizzaStore())->orderPizza(PizzaType::CHEESE);

        $this->assertInstanceOf(ChicagoCheesePizza::class, $pizza);

        $this->expectOutputString('Preparing Chicago Style Cheese Pizza. Bake for 25 minutes for 350". Cutting the pizza into square slices. Place pizza in box. ');
    }
}
