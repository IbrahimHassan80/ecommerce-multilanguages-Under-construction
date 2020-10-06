<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Request;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // if user not login //
        if(!$request->expectsJson() ) {
            if ( Request::is('admin') || Request::is('admin/*'))
                return route('get.admin.login'); // admin login
            else{ 
                return route('login'); // website login
                }
        }
    
    }//
}//End//