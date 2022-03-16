<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{

    public function handle($request, Closure $next, ...$guards) {

        $this->authenticate($request, $guards);

        if(explode('/', $request->route()->getPrefix())[0] == 'store') {
            $user = Auth::user();
            $store_id = $request['store_id'] = $user->currentAccessToken()->store_id;

            if ($guards && $user->user_type=='employee') {
                $flag = $request->route()->getAction('permission');

                if ($flag === null || !hasAnyPermission($flag, $user, $store_id)) {
                    return response()->json(['message' => 'Unauthorized.'], 401);
                }
            }

            if(!$store_id) {
                return response()->json(['message' => 'You need to login from store account to access this page.']);
            }
        }

        return $next($request);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
