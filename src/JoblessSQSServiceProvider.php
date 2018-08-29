<?php

namespace Adalessa\SQSJobless;

use Illuminate\Support\ServiceProvider;

class JoblessSQSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['queue']->extend('sqs-jobless', function () {
            return new JoblessConnector();
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
