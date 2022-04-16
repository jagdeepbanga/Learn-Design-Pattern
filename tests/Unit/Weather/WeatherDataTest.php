<?php

namespace Tests\Unit\Weather;

use App\Weather\CurrentConditionsDisplay;
use App\Weather\ForecastDisplay;
use App\Weather\HeatIndexDisplay;
use App\Weather\StatisticsDisplay;
use App\Weather\WeatherData;
use Tests\TestCase;

class WeatherDataTest extends TestCase
{
    /** @test */
    public function can_show_current_conditions_display(): void
    {
        $weatherData = new WeatherData();
        $currentCondition = new CurrentConditionsDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30);
        $weatherData->setMeasurements(82, 70, 29.5);
        $weatherData->setMeasurements(78, 90, 28);

        $this->expectOutputString(
            'Current conditions: 80F degrees and 65 humidity. Current conditions: 82F degrees and 70 humidity. Current conditions: 78F degrees and 90 humidity. '

        );
    }

    /** @test */
    public function can_show_forecast_display(): void
    {
        $weatherData = new WeatherData();
        $forecastDisplay = new ForecastDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30);
        $weatherData->setMeasurements(82, 70, 29.5);
        $weatherData->setMeasurements(78, 90, 28);

        $this->expectOutputString(
            'Improving weather on the way!Watch out for cooler, rainy weatherWatch out for cooler, rainy weather'

        );
    }

    /** @test */
    public function can_show_statics_display(): void
    {
        $weatherData = new WeatherData();
        $statisticsDisplay = new StatisticsDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30);
        $weatherData->setMeasurements(82, 70, 29.5);
        $weatherData->setMeasurements(78, 90, 28);

        $this->expectOutputString(
            'Avg/Max/Min temperature = 80/80/80. Avg/Max/Min temperature = 82/82/80. Avg/Max/Min temperature = 82/82/78. '

        );
    }

    /** @test */
    public function can_show_heat_index_display(): void
    {
        $weatherData = new WeatherData();
        $heatIndexDisplay = new HeatIndexDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30);
        $weatherData->setMeasurements(82, 70, 29.5);
        $weatherData->setMeasurements(78, 90, 28);

        $this->expectOutputString(
            'Heat index is  31.12513028935. Heat index is  26.269564905252. Heat index is  11.476271057796. '
        );
    }

    /** @test */
    public function can_remove_observer_from_subject_notification(): void
    {
        $weatherData = new WeatherData();
        $currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30);

        $weatherData->removeObserver($currentConditionsDisplay);

        $weatherData->setMeasurements(82, 70, 29.5);
        $weatherData->setMeasurements(78, 90, 28);

        $this->expectOutputString(
            'Current conditions: 80F degrees and 65 humidity. '
        );
    }
}
