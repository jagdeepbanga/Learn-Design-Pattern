<?php

namespace App\Weather;

use App\Weather\Contracts\WeatherDataInterface;

class WeatherData implements WeatherDataInterface
{
    public function getTemperature(): float
    {
        return 32;
    }

    public function getHumidity(): float
    {
        return 43;
    }

    public function getPressure(): float
    {
        return 1017;
    }

    public function measurementsChanged(): void
    {
        $temp = $this->getTemperature();
        $humidity = $this->getHumidity();
        $pressure = $this->getPressure();

        (new CurrentConditionDisplay())->update($temp, $humidity, $pressure);
        (new StaticDisplay())->update($temp, $humidity, $pressure);
        (new ForecastDisplay())->update($temp, $humidity, $pressure);
    }
}
