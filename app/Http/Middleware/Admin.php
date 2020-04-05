<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;

class Admin
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


         //如果你不是管理的權限
        if(!Auth::user()->admin)
        {

           Session::flash('error', '您無此權限操作管理!');

              return redirect()->back();

        }

        return $next($request);
    }
}
