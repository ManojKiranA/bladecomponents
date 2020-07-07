<?php

namespace Manojkiran\Bladecomponents\Tests;

use Manojkiran\BladeComponents\BladecomponentsServiceProvider;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [BladecomponentsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
