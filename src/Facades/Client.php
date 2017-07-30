<?php

namespace Shigetaa\Imap\Facades;

use Illuminate\Support\Facades\Facade;
use Shigetaa\Imap\ClientManager;

class Client extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ClientManager::class;
    }
}