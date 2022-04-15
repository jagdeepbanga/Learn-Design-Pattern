<?php

namespace Tests\Unit\Duck;

use App\Duck\DecoyDuck;
use App\Duck\MallardDuck;
use App\Duck\RedHeadDuck;
use App\Duck\RubberDuck;
use Tests\TestCase;

class DuckTest extends TestCase
{
    /**
     * @test
     * @dataProvider  DataProvider
     */
    public function duck_cases($className, $behaviour)
    {
        $duck = new $className;
        $this->assertEquals($className, $duck->display());
        $this->assertEquals(true, $behaviour['fly']);
        $this->assertEquals(true, $behaviour['quack']);
        $this->assertEquals(true, $behaviour['swim']);
    }

    public function DataProvider()
    {
        return [
            'for MallardDuck' => [
                MallardDuck::class,
                [
                    'fly' => true,
                    'quack' => true,
                    'swim' => true
                ]
            ],
            'for RedHeadDuck' => [
                RedHeadDuck::class,
                [
                    'fly' => true,
                    'quack' => true,
                    'swim' => true
                ]
            ],
            'for RubberDuck' => [
                RubberDuck::class,
                [
                    'fly' => false,
                    'quack' => true,
                    'swim' => true
                ]
            ],
            'for DecoyDuck' => [
                DecoyDuck::class,
                [
                    'fly' => false,
                    'quack' => false,
                    'swim' => false
                ]
            ],
        ];
    }
}
