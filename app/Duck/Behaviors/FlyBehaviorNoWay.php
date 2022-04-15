<?php

namespace App\Duck\Behaviors;

use App\Duck\Behaviors\Contracts\FlyBehaviorInterface;

class FlyBehaviorNoWay implements FlyBehaviorInterface
{
    public function fly(): bool
    {
        return false;
    }
}
