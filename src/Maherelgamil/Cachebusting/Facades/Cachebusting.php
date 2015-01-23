<?php namespace Maherelgamil\Cachebusting\Facades;
use Illuminate\Support\Facades\Facade;
class Cachebusting extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cachebusting';
    }
}