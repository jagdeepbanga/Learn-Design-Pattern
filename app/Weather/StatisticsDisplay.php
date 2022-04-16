<?php

namespace App\Weather;

use App\Weather\Contracts\DisplayInterface;
use App\Weather\Contracts\ObserverInterface;
use App\Weather\Contracts\SubjectInterface;

class StatisticsDisplay implements ObserverInterface, DisplayInterface
{
    private float $maxTemperature = 0;
    private float $minTemperature = 200;
    private float $tempSum = 0;
    private int $numberOfReadings = 0;

    public function __construct(SubjectInterface $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    public function display(): void
    {
        printf("Avg/Max/Min temperature = %s/%s/%s. ",
            $this->maxTemperature,
            $this->maxTemperature,
            $this->minTemperature);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->tempSum += $temperature;
        $this->numberOfReadings++;

        if ($temperature > $this->maxTemperature) {
            $this->maxTemperature = $temperature;
        }

        if ($temperature < $this->minTemperature) {
            $this->minTemperature = $temperature;
        }

        $this->display();
    }
}
