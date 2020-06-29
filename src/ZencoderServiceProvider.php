<?php

namespace Jaybizzle\Zencoder;

use Illuminate\Support\ServiceProvider;
use ReflectionClass;

class ZencoderServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/zencoder.php' => config_path('zencoder.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Zencoder::class, function () {
            return new Zencoder(
                config('zencoder.integrationMode') ? config('zencoder.integrationModeApiKey') : config('zencoder.apiKey'),
                config('zencoder.apiVersion'),
                config('zencoder.apiHost'),
                config('zencoder.apiDebug')
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['zencoder'];
    }

    public function guessPackagePath()
    {
        $path = with(new ReflectionClass($this))->getFileName();

        return realpath(dirname($path).'/');
    }
}
