<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         // mendaftarkan contact 
        $this->app->when('App\Http\Controllers\ContactController')
            ->needs('App\Domain\Contracts\ContactInterface')
            ->give('App\Domain\Repositories\ContactRepository');

        $this->app->when('App\Http\Controllers\BookController')
            ->needs('App\Domain\Contracts\BookInterface')
            ->give('App\Domain\Repositories\BookRepository');
    }
}
