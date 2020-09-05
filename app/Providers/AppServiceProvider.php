<?php

namespace newwwsme\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
         Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Schema::defaultStringLength(191);

        $this->app->bind('newwwsme\\newwwsme\\Noticias\\NoticiasRepositoryInterface', 'newwwsme\\newwwsme\\Noticias\\NoticiasRepository');
        $this->app->bind('newwwsme\\newwwsme\\Modelos\\ModelosRepositoryInterface', 'newwwsme\\newwwsme\\Modelos\\ModelosRepository');

    }
}
