<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isarea1
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
            case ('ADMINISTRADOR'):
                return redirect('/');

                break;
            case('RECURSOS HUMANOS'):
                return $next ($request);
                break;
            case ('RECURSOS MATERIALES'):
                return redirect('/area2');
                break;
            case ('VINCULACION'):
                return redirect('/area3');
                break;
                case ('AREA4'):
                    return redirect('/area4');
                    break;


        }



    }

}
