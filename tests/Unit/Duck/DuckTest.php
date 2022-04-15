<?php

namespace Tests\Unit\Duck;

use App\Duck\Behaviors\Enums\QuackEnum;
use App\Duck\Behaviors\FlyBehaviorNoWay;
use App\Duck\Behaviors\FlyBehaviorWithWings;
use App\Duck\Behaviors\MuteQuackBehavior;
use App\Duck\Behaviors\QuackBehavior;
use App\Duck\Behaviors\SqueakBehavior;
use App\Duck\DecoyDuck;
use App\Duck\MallardDuck;
use App\Duck\RedHeadDuck;
use App\Duck\RubberDuck;
use Tests\TestCase;

class DuckTest extends TestCase
{
    /**
     * @test
     * @dataProvider  DataProvider
     */
    public function duck_cases(
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
                    'fly' => true,
                    'swim' => true
                ]
            ],
            'for RedHeadDuck' => [
                RedHeadDuck::class,
                SqueakBehavior::class,
                FlyBehaviorWithWings::class,
                [
                    'quack' => QuackEnum::SQUEAK,
                    'fly' => true,
                    'swim' => true
                ]
            ],
            'for RubberDuck' => [
                RubberDuck::class,
                QuackBehavior::class,
                FlyBehaviorNoWay::class,
                [
                    'quack' => QuackEnum::QUACK,
                    'fly' => false,
                    'swim' => true
                ]
            ],
            'for DecoyDuck' => [
                DecoyDuck::class,
                MuteQuackBehavior::class,
                FlyBehaviorNoWay::class,
                [
                    'quack' => QuackEnum::MuteQuack,
                    'fly' => false,
                    'swim' => true
                ]
            ],
        ];
    }
}
