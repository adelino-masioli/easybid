<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $models = array(
            'Setting',
            'User',
            'Status'
        );

        foreach ($models as $model) {
            $this->app->bind("App\Repositories\\{$model}\\{$model}RepositoryInterface", "App\Repositories\\{$model}\\{$model}Repository");
        }
    }
}
