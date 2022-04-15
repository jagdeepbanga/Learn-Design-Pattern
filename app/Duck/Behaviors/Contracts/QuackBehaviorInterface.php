<?php

namespace App\Duck\Behaviors\Contracts;

use App\Duck\Behaviors\Enums\QuackEnum;

interface QuackBehaviorInterface
{
    public function quack(): QuackEnum;
}
