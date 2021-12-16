<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use Auth;
class CustomAuth

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // echo "Hello I am Middleware";

       $path = $request->path();
       if(($path == 'login' || $path == 'register') && Session::get('user'))
       {
            if(Auth::user()->role_id == 1){
                
                return redirect('admin/dashboard');
            
            }
            if(Auth::user()->role_id == 2){
                
                return  redirect('resellser/dashboard');
            }
            if(Auth::user()->role_id == 3){
                
                return  redirect('subresellers/dashboard');
            }

            if(Auth::user()->role_id == 4){
                return  response()->view('users.user');
            }
       }
    //    elseif(($path!= 'login' && !Session::get('user')  && $path != 'register' && !Session::get('user')))
    //    {
    //         return view('admin.dashboard');
    //    }
        return $next($request);
    }
}
