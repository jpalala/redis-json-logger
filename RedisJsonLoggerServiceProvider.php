<?php

namespace YourPackageNamespace\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Redis;
use Exception;

class RedisLoggerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind('redis-logger', function () {
            return new RedisLogger();
        });

        $handler = function (Exception $exception) {
            app('redis-logger')->log($exception);
        };

        $this->app['Illuminate\Contracts\Debug\ExceptionHandler']->report($handler);
    }

    public function register()
    {
        //
    }
}
