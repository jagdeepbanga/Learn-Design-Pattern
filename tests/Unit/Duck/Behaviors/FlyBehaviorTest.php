<?php

namespace Tests\Unit\Duck\Behaviors;

use App\Duck\Behaviors\FlyNoWay;
use App\Duck\Behaviors\FlyWithWings;
use Tests\TestCase;

class FlyBehaviorTest extends TestCase
{
    /** @test */
    public function can_fly_behavior(): void
    {
        $this->assertTrue((new FlyWithWings())->fly());
        $this->assertFalse((new FlyNoWay())->fly());
    }
}
