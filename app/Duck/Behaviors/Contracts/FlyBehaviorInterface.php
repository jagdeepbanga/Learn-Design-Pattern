<?php

namespace App\Duck\Behaviors\Contracts;

use App\Duck\Behaviors\Enums\FlyEnum;

interface FlyBehaviorInterface
{
    public function fly(): FlyEnum;
}
