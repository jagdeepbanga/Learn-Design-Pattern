<?php

namespace Tests\Unit\PizzaFranchise;

use App\PizzaFranchise\Enums\PizzaType;
use App\PizzaFranchise\Factory\ClamPizza;
use App\PizzaFranchise\Factory\NYCheesePizza;
use App\PizzaFranchise\Factory\PepperoniPizza;
use App\PizzaFranchise\Factory\VeggiePizza;
use App\PizzaFranchise\NYStylePizzaStore;
use Tests\TestCase;

class NYStylePizzaStoreTest extends TestCase
{
    /** @test */
    public function can_bake_ny_style_cheese_pizza(): void
    {
        $pizza = (new NYStylePizzaStore())->orderPizza(PizzaType::CHEESE);

        $this->assertInstanceOf(NYCheesePizza::class, $pizza);

        $this->expectOutputString('Preparing NY Style Cheese Pizza. Bake for 25 minutes for 350". Cutting the pizza into diagonal slices. Place pizza in box. ');
    }

    /** @test */
    public function can_bake_ny_style_pepperoni_pizza(): void
    {
        $pizza = (new NYStylePizzaStore())->orderPizza(PizzaType::PEPPERONI);

        $this->assertInstanceOf(PepperoniPizza::class, $pizza);

        $this->expectOutputString('Preparing Base Style Pepperoni Pizza. Bake for 25 minutes for 350". Cutting the pizza into diagonal slices. Place pizza in box. ');
    }

    /** @test */
    public function can_bake_ny_style_clam_pizza(): void
    {
        $pizza = (new NYStylePizzaStore())->orderPizza(PizzaType::CLAM);

        $this->assertInstanceOf(ClamPizza::class, $pizza);

        $this->expectOutputString('Preparing Base Style Clam Pizza. Bake for 25 minutes for 350". Cutting the pizza into diagonal slices. Place pizza in box. ');
    }

    /** @test */
    public function can_bake_ny_style_veggie_pizza(): void
    {
        $pizza = (new NYStylePizzaStore())->orderPizza(PizzaType::VEGGIE);

        $this->assertInstanceOf(VeggiePizza::class, $pizza);

        $this->expectOutputString('Preparing Base Style Veggie Pizza. Bake for 25 minutes for 350". Cutting the pizza into diagonal slices. Place pizza in box. ');
    }
}
