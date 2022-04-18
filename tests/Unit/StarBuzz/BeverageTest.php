<?php

namespace Tests\Unit\StarBuzz;

use App\StarBuzz\Coffees\DarkRoast;
use App\StarBuzz\Coffees\Espresso;
use App\StarBuzz\Coffees\HouseBlend;
use App\StarBuzz\Enums\Size;
use App\StarBuzz\Mocha;
use App\StarBuzz\Soy;
use App\StarBuzz\SteamedMilk;
use App\StarBuzz\Whip;
use Tests\TestCase;

class BeverageTest extends TestCase
{
    /** @test */
    public function can_order_espresso_coffee(): void
    {
        $beverage = new Espresso();

        $this->assertEquals('Espresso Coffee', $beverage->getDescription());
        $this->assertEquals(1.99, $beverage->cost());

        $beverage2 = new DarkRoast();
        $mocha = new Mocha($beverage2);
        $doubleMocha = new Mocha($mocha);
        $whip = new Whip($doubleMocha);

        $this->assertEquals(1.49, $whip->cost());
        $this->assertEquals('Dark Roast Coffee, Mocha, Mocha, Whip', $whip->getDescription());
    }

    /** @test */
    public function can_order_double_mocha_soy_latte_with_wip_(): void
    {
        $beverage = new DarkRoast();
        $mocha = new Mocha($beverage);
        $doubleMocha = new Mocha($mocha);
        $whip = new Whip($doubleMocha);

        $this->assertEquals(1.49, $whip->cost());
        $this->assertEquals('Dark Roast Coffee, Mocha, Mocha, Whip', $whip->getDescription());
    }

    /** @test */
    public function can_order_house_blend_soy_mocha_with_Whip(): void
    {
        $houseBlend = new HouseBlend();
        $soy = new Soy($houseBlend);
        $mocha = new Mocha($soy);
        $whip = new Whip($mocha);

        $this->assertEquals(1.34, $whip->cost());
        $this->assertEquals('House Blend Coffee, Soy, Mocha, Whip', $whip->getDescription());
    }

    /** @test */
    public function can_order_large_house_blend_steamed_milk_mocha()
    {
        $houseBlend = (new HouseBlend())->setSize(Size::LARGE);
        $soy = new SteamedMilk($houseBlend);
        $mocha = new Mocha($soy);
        $whip = new Whip($mocha);

        $this->assertEquals(1.44, $whip->cost());
        $this->assertEquals('House Blend Coffee, Steam Milk, Mocha, Whip', $whip->getDescription());
    }
}
