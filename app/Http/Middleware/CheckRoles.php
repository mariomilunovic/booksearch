<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$permitted_roles)
    {

        // Da li je neko ulogovan?
        if($request->user() === null)
        {
            toast()->danger('Niste ulogovani')->push();
            return redirect('login')->with('error','Niste ulogovani');

        }

        // Da li ima definisanih dozvola ili dozvola nije potrebna
        if($request->user()->hasAnyRoles($permitted_roles) || !$permitted_roles)
        {
            return $next($request);
        }
        toast()->danger('Nemate dozvolu za pristup')->push();
        return redirect()->back();


        return $next($request);
    }
}
