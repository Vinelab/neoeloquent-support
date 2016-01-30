<?php

namespace Vinelab\NeoEloquent\Support\Facades;

/**
 * @see \Illuminate\Auth\AuthManager
 * @see \Vinelab\NeoEloquent\Contracts\Auth\Factory
 * @see \Vinelab\NeoEloquent\Contracts\Auth\Guard
 * @see \Vinelab\NeoEloquent\Contracts\Auth\StatefulGuard
 */
class Auth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth';
    }
}
