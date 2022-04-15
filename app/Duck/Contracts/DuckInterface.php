<?php

namespace App\Duck\Contracts;

interface DuckInterface
{
    public function quack(): bool;

    public function swim(): bool;

    public function fly(): bool;

    public function display(): string;
}
