<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

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

        /** @var \Illuminate\Foundation\Application $app */
        // https://stackoverflow.com/questions/75671705/isproduction-method-is-not-detected-in-this-app-isproduction-in-laravel
        $app = $this->app;

        // 本番環境以外で有効にする
        // Model::preventAccessingMissingAttributes(! $this->app->isProduction());
        Model::shouldBeStrict(! $app->isProduction());
    }
}
