<?php

namespace Tests\Unit\Duck\Behaviors;

use App\Duck\Behaviors\FlyBehaviorNoWay;
use App\Duck\Behaviors\FlyBehaviorWithWings;
use Tests\TestCase;

class FlyBehaviorTest extends TestCase
{
    /** @test */
    public function can_fly_behavior(): void
    {
        $this->assertTrue((new FlyBehaviorWithWings())->fly());
        $this->assertFalse((new FlyBehaviorNoWay())->fly());
    }
}
