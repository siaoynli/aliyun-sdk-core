<?php

namespace AliCloud\Core;

use Illuminate\Support\ServiceProvider;

class LaravelAliCloudServerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/alicloud.php' => config_path('alicloud.php'),
        ]);
    }
}
