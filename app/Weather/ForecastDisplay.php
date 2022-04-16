<?php

namespace App\Weather;

use App\Weather\Contracts\DisplayInterface;
use App\Weather\Contracts\ObserverInterface;
use App\Weather\Contracts\SubjectInterface;

class ForecastDisplay implements ObserverInterface, DisplayInterface
{
    private float $currentPressure = 29;
    private float $lastPressure;

    public function __construct(SubjectInterface $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    public function display(): void
    {
        if ($this->currentPressure > $this->lastPressure) {
            printf('Improving weather on the way!');
            return;
        }

        if ($this->currentPressure == $this->lastPressure) {
            printf('More of the same');
            return;
        }

        if ($this->currentPressure < $this->lastPressure) {
            printf('Watch out for cooler, rainy weather');
        }
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }
}
