<?php

namespace App\Duck\Behaviors\Contracts;

use App\Duck\Behaviors\Enums\QuackEnum;

interface QuackInterface
{
    public function quack(): QuackEnum;
}
