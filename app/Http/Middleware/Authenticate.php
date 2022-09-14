<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

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
        if ($request->is('api/*')) {
            abort(response()->json(['status' => 401, 'message' => 'Unauthorized'], 401));
        }

        if (!$request->expectsJson()) {
            return route('login');
        } else {
            abort(response()->json(['status' => 401, 'message' => 'Unauthorized'], 401));
        }
    }
}