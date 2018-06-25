<?php

namespace Tum\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/contact'),
        ], 'contact');
        
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->publishes([
            __DIR__.'/../config/contact.php' => config_path('contact.php'),
        ], 'contact');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
