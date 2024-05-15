<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PostAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request)  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $post = $request->route()->parameter('post');

        if (Auth::check() && (Auth::user()->admin == 1 || $post->user_id === Auth::id())) {
            return $next($request);
        }

        return abort(403, __('auth.unauthorized'));
    }
}
