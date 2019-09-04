<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
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
        
        if(!session("username"))
        {

            return redirect("login");
        }


        /*
        echo "User Middleware";
        die();
        */

/*
        
        dd($request->input());
        return $next($request);
        
*/
          
        //  $next($request);
        //dd($request->input());
         
        

        return $next($request);
    }


    /*

     public function terminate($request, $response)
    {
        // Store the session data...
    }

    */
}
