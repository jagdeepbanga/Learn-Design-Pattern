<?php

namespace App\Duck\Behaviors;

use App\Duck\Behaviors\Contracts\QuackInterface;
use App\Duck\Behaviors\Enums\QuackEnum;

class Quack implements QuackInterface
{
    public function quack(): QuackEnum
    {
        return QuackEnum::QUACK;
    }
}
