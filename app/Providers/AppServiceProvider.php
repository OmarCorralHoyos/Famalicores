<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema as FacadesSchema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        FacadesSchema::defaultStringLength(191);
    }
    {
        paginator::useBootstrap();
        if (config('app.env') === 'production') {
            URL::forceScheme(scheme:'https');
        }
    }
}
