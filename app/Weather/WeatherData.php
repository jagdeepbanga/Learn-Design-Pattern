<?php

namespace App\Weather;

use App\Weather\Contracts\ObserverInterface;
use App\Weather\Contracts\SubjectInterface;
use Illuminate\Support\Collection;

class WeatherData implements SubjectInterface
{
    /**
     * @var Collection<string, ObserverInterface>
     */
    private Collection $observers;

    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function __construct()
    {
        $this->observers = new Collection();
    }

    public function registerObserver(ObserverInterface $observer): bool
    {
        $this->observers->put(get_class($observer), $observer);

        return true;
    }

    public function removeObserver(ObserverInterface $observer): bool
    {
        $this->observers->pull(get_class($observer));

        return true;
    }

    public function notifyObserver(): void
    {
        $this->observers->each(function (ObserverInterface $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        });
    }

    public function measurementsChanged(): void
    {
        $this->notifyObserver();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}
