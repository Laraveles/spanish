<?php
namespace Laraveles\Spanish\Tests;

use Laraveles\Spanish\SpanishServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            SpanishServiceProvider::class,
        ];
    }
}
