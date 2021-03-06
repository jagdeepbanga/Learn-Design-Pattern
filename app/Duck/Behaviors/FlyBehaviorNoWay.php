<?php

namespace App\Duck\Behaviors;

use App\Duck\Behaviors\Contracts\FlyBehaviorInterface;
use App\Duck\Behaviors\Enums\FlyEnum;

class FlyBehaviorNoWay implements FlyBehaviorInterface
{
    public function fly(): FlyEnum
    {
        return FlyEnum::CAN_NOT_FLY;
    }
}
