<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isarea3

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
//        return $next($request);
//
//        if (Auth::user()->area_id == 200) {
//            return $next ($request);
//        } else {
//            return redirect('/user');
//        }

        switch (Auth::user()->area_id){
            case ('200'):
                return redirect('/');

                break;
            case('AREA1'):
                return redirect('/area1');
                break;
            case ('AREA2'):
                return redirect('/area2');
                break;
            case ('AREA3'):
                return $next ($request);
                break;


        }



    }

}
