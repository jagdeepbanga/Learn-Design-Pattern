<?php

namespace App\Duck;

use App\Duck\Behaviors\Contracts\FlyBehaviorInterface;
use App\Duck\Behaviors\Contracts\QuackBehaviorInterface;
use App\Duck\Behaviors\Enums\QuackEnum;
use App\Duck\Contracts\DuckInterface;

abstract class Duck implements DuckInterface
{
    private QuackBehaviorInterface $quackBehavior;
    private FlyBehaviorInterface $flyBehavior;

    public function __construct(QuackBehaviorInterface $quackBehavior, FlyBehaviorInterface $flyBehavior)
    {
        $this->quackBehavior = $quackBehavior;
        $this->flyBehavior = $flyBehavior;
    }

    public function display(): string
    {
        return get_class($this);
    }

    public function swim(): bool
    {
        return true;
    }

    public function performQuack(): QuackEnum
    {
        return $this->quackBehavior->quack();
    }

    public function performFly(): bool
    {
        return $this->flyBehavior->fly();
    }
}
