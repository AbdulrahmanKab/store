<?php

namespace App\Http\Middleware;

use Closure;

class cmsMiddleware
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
        $user ='noone';
        if (isset(\Auth::user()->name)) {
        $user = \Auth::user()->name;
    }

        $admin=\DB::table('admin')->leftjoin('users','user_id','=','users.id')->where('name','=',$user)->first();

    if ($admin ==null){
    return redirect()->route('home');
    }

        return $next($request);
    }
}
