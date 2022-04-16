<?php

namespace App\Weather\Contracts;

interface ObserverInterface
{
    public function update(float $temperature, float $humidity, float $pressure): void;
}
