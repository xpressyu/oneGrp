<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected $redirectTo = '';

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        return route('login');
    }

    protected function authenticate($request, array $guards)
    {
        if (empty($guards)) {
            $guards = [null];
        }

        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                return $this->auth->shouldUse($guard);
            }
        }

        // Choose which login page based on guards
        $guard = $guards[0];
        if ($guard == 'admin') {
            $this->redirectTo = route('admin.login');
        }

        throw new AuthenticationException(
            'Unauthenticated.', $guards, $this->redirectTo ?: $this->redirectTo($request)
        );
    }
}
