<?php

namespace App\Weather;

use App\Weather\Contracts\DisplayInterface;
use App\Weather\Contracts\ObserverInterface;
use App\Weather\Contracts\SubjectInterface;

class CurrentConditionsDisplay implements ObserverInterface, DisplayInterface
{
    private float $temperature;
    private float $humidity;

    public function __construct(SubjectInterface $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    public function display(): void
    {
        printf("Current conditions: %sF degrees and %s humidity. ", $this->temperature, $this->humidity);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;

        $this->display();
    }
}
