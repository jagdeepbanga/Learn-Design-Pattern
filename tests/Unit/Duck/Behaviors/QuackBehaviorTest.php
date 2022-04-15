<?php

namespace Tests\Unit\Duck\Behaviors;

use App\Duck\Behaviors\Enums\QuackEnum;
use App\Duck\Behaviors\MuteQuack;
use App\Duck\Behaviors\Quack;
use App\Duck\Behaviors\Squeak;
use Tests\TestCase;

class QuackBehaviorTest extends TestCase
{
    /** @test */
    public function can_quack_behavior(): void
    {
        $this->assertEquals(QuackEnum::QUACK, (new Quack())->quack());
        $this->assertEquals(QuackEnum::SQUEAK, (new Squeak())->quack());
        $this->assertEquals(QuackEnum::MuteQuack, (new MuteQuack())->quack());
    }
}
