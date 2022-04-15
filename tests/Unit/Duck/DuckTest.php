<?php

namespace Tests\Unit\Duck;

use App\Duck\Behaviors\Enums\FlyEnum;
use App\Duck\Behaviors\Enums\QuackEnum;
use App\Duck\Behaviors\FlyBehaviorNoWay;
use App\Duck\Behaviors\FlyBehaviorWithWings;
use App\Duck\Behaviors\FlyRocketPowered;
use App\Duck\Behaviors\MuteQuackBehavior;
use App\Duck\Behaviors\QuackBehavior;
use App\Duck\Behaviors\SqueakBehavior;
use App\Duck\DecoyDuck;
use App\Duck\MallardDuck;
use App\Duck\MiniDuckSimulator;
use App\Duck\RedHeadDuck;
use App\Duck\RubberDuck;
use Tests\TestCase;

class DuckTest extends TestCase
{
    /**
     * @test
     * @dataProvider  DataProvider
     */
    public function ducks_with_different_behaviors(
        string $className,
        string $quackBehavior,
        string $flyBehavior,
        array $behaviourOutput
    ): void {
        $duck = new $className(new $quackBehavior(), new $flyBehavior());

        $this->assertEquals($className, $duck->display());
        $this->assertEquals($behaviourOutput['fly'], $duck->performFly());
        $this->assertEquals($behaviourOutput['quack'], $duck->performQuack());
        $this->assertEquals($behaviourOutput['swim'], $duck->swim());
    }

    public function DataProvider(): array
    {
        return [
            'for MallardDuck' => [
                MallardDuck::class,
                QuackBehavior::class,
                FlyBehaviorWithWings::class,
                [
                    'quack' => QuackEnum::QUACK,
                    'fly' => FlyEnum::FLY,
                    'swim' => true
                ]
            ],
            'for RedHeadDuck' => [
                RedHeadDuck::class,
                SqueakBehavior::class,
                FlyBehaviorWithWings::class,
                [
                    'quack' => QuackEnum::SQUEAK,
                    'fly' => FlyEnum::FLY,
                    'swim' => true
                ]
            ],
            'for RubberDuck' => [
                RubberDuck::class,
                QuackBehavior::class,
                FlyBehaviorNoWay::class,
                [
                    'quack' => QuackEnum::QUACK,
                    'fly' => FlyEnum::CAN_NOT_FLY,
                    'swim' => true
                ]
            ],
            'for DecoyDuck' => [
                DecoyDuck::class,
                MuteQuackBehavior::class,
                FlyBehaviorNoWay::class,
                [
                    'quack' => QuackEnum::MuteQuack,
                    'fly' => FlyEnum::CAN_NOT_FLY,
                    'swim' => true
                ]
            ],
        ];
    }

    /** @test */
    public function can_change_fly_behaviour_dynamically(): void
    {
        $miniDuck = new MiniDuckSimulator(
            new QuackBehavior(),
            new FlyBehaviorWithWings()
        );

        $this->assertEquals(QuackEnum::QUACK, $miniDuck->performQuack());
        $this->assertEquals(FlyEnum::FLY, $miniDuck->performFly());

        $miniDuck->setQuackBehavior(new SqueakBehavior());
        $miniDuck->setFlyBehavior(new FlyRocketPowered());

        $this->assertEquals(QuackEnum::SQUEAK, $miniDuck->performQuack());
        $this->assertEquals(FlyEnum::FLY_WITH_ROCKET, $miniDuck->performFly());
    }
}
