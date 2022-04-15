<?php

namespace App\Duck\Contracts;

use App\Duck\Behaviors\Enums\QuackEnum;

interface DuckInterface
{
    public function display(): string;

    public function swim(): bool;

    public function performQuack(): QuackEnum;

    public function performFly(): bool;
}
