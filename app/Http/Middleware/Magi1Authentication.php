<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Magi1Authentication extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if( !$request->expectsJson() ){
            return url('magi1/login');
        }
    }
}
