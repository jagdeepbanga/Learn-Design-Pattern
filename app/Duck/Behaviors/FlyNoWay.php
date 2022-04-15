<?php

namespace App\Duck\Behaviors;

use App\Duck\Behaviors\Contracts\FlyInterface;

class FlyNoWay implements FlyInterface
{
    public function fly(): bool
    {
        return false;
    }
}
