<?php

namespace Jaybizzle\Zencoder\Facades;

use Illuminate\Support\Facades\Facade;
use Jaybizzle\Zencoder\Zencoder as ZencoderConcrete;

class Zencoder extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ZencoderConcrete::class;
    }
}
