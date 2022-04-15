<?php

namespace App\Duck\Behaviors;

use App\Duck\Behaviors\Contracts\QuackBehaviorInterface;
use App\Duck\Behaviors\Enums\QuackEnum;

class SqueakBehavior implements QuackBehaviorInterface
{
    public function quack(): QuackEnum
    {
        return QuackEnum::SQUEAK;
    }
}
