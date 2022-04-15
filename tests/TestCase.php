<?php

namespace Tests;

use PHPUnit\Framework\TestCase as TestCaseAlias;

class TestCase extends TestCaseAlias
{
    /** @test */
    public function init_test()
    {
        $this->assertTrue(true);
    }
}
