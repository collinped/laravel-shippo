<?php

namespace Collinped\Shippo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Collinped\Shippo\Shippo
 */
class Shippo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-shippo';
    }
}
