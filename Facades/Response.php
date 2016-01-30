<?php

namespace Vinelab\NeoEloquent\Support\Facades;

/**
 * @see \Vinelab\NeoEloquent\Contracts\Routing\ResponseFactory
 */
class Response extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Vinelab\NeoEloquent\Contracts\Routing\ResponseFactory';
    }
}
