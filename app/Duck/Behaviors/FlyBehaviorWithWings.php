<?php

namespace App\Duck\Behaviors;

use App\Duck\Behaviors\Contracts\FlyBehaviorInterface;

class FlyBehaviorWithWings implements FlyBehaviorInterface
{
    public function fly(): bool
    {
        return true;
    }
}
