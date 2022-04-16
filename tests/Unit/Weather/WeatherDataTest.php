<?php

namespace Tests\Unit\Weather;

use App\Weather\WeatherData;
use Tests\TestCase;

class WeatherDataTest extends TestCase
{
    /** @test */
    public function has_weather_measurement()
    {
        $weatherData = (new WeatherData());
        $this->assertNotEmpty($weatherData->getTemperature());
        $this->assertNotEmpty($weatherData->getHumidity());
        $this->assertNotEmpty($weatherData->getPressure());
    }
}
