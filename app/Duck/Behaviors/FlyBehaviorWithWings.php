<?php

namespace App\Duck\Behaviors;

use App\Duck\Behaviors\Contracts\FlyBehaviorInterface;
use App\Duck\Behaviors\Enums\FlyEnum;

class FlyBehaviorWithWings implements FlyBehaviorInterface
{
    public function fly(): FlyEnum
    {
        return FlyEnum::FLY;
    }
}
