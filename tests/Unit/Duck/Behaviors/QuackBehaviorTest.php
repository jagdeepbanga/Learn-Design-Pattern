<?php

namespace Tests\Unit\Duck\Behaviors;

use App\Duck\Behaviors\Enums\QuackEnum;
use App\Duck\Behaviors\MuteQuackBehavior;
use App\Duck\Behaviors\QuackBehavior;
use App\Duck\Behaviors\SqueakBehavior;
use Tests\TestCase;

class QuackBehaviorTest extends TestCase
{
    /** @test */
    public function can_quack_behavior(): void
    {
        $this->assertEquals(QuackEnum::QUACK, (new QuackBehavior())->quack());
        $this->assertEquals(QuackEnum::SQUEAK, (new SqueakBehavior())->quack());
        $this->assertEquals(QuackEnum::MuteQuack, (new MuteQuackBehavior())->quack());
    }
}
