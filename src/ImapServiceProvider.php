<?php

namespace Shigetaa\Imap;

use Illuminate\Support\ServiceProvider;

class ImapServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/imap.php' => base_path('config/imap.php')
        ], 'config');

    }

    public function register()
    {

    }

}