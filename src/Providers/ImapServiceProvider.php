<?php

namespace Shigetaa\Imap\Providers;

use Illuminate\Support\ServiceProvider;
use Shigetaa\Imap\Client;
use Shigetaa\Imap\ClientManager;

class ImapServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/imap.php' => config_path('imap.php'),
        ], 'config');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ClientManager::class, function ($app) {
            return new ClientManager($app);
        });

        $this->app->singleton(Client::class, function ($app) {
            return $app[ClientManager::class]->account();
        });

    }
}