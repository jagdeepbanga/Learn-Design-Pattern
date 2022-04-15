<?php

namespace App\Duck;

use App\Duck\Contracts\DuckInterface;

abstract class Duck implements DuckInterface
{
    public function display(): string
    {
        return get_class($this);
    }

    public function quack(): bool
    {
        return true;
    }

    public function swim(): bool
    {
        return true;
    }

    public function fly(): bool
    {
        return true;
    }
}
