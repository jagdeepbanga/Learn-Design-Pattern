<?php

namespace App\Duck\Behaviors;

use App\Duck\Behaviors\Contracts\FlyInterface;

class FlyWithWings implements FlyInterface
{
    public function fly(): bool
    {
        return true;
    }
}
