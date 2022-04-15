<?php

namespace App\Duck;

use App\Duck\Contracts\DuckInterface;

abstract class Duck implements DuckInterface
{
    public function display()
    {
        return get_class($this);
    }

    public function quack()
    {
        return true;
    }

    public function swim()
    {
        return true;
    }

    public function fly()
    {
        return true;
    }
}
