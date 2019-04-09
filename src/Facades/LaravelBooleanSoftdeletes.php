<?php

namespace dekts\LaravelBooleanSoftdeletes\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelBooleanSoftdeletes extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelbooleansoftdeletes';
    }
}
