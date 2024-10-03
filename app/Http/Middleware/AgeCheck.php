<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //eg http://127.0.0.1:8000/testmiddleware?age=15  will not allow

        // if($request->age <18){
        //     die('You cannot access this website');
        // }
         return $next($request);
       
    }
}
