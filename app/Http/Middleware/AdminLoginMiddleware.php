<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Support\Facades\View;


class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            //$user = Auth::user();
            if(Auth::User()->level==1)
            {
                return $next($request);
            }
            else
            {

                return redirect('user/index2');
            }
        }
        else
        {

            return redirect('admin/login');
        }
    }
}
