<?php

namespace App\Weather\Contracts;

interface ObserverInterface
{
    public function update(float $temp, float $humidity, float $pressure): void;
}
