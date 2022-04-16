<?php

namespace App\Weather\Contracts;

interface WeatherDataInterface
{
    public function getTemperature(): float;

    public function getHumidity(): float;

    public function getPressure(): float;

    public function measurementsChanged();
}
