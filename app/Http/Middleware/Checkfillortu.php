<?php

namespace App\Http\Middleware;

use App\Models\DataOrangTua;
use Closure;
use Illuminate\Http\Request;

class Checkfillortu
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
        if(!DataOrangTua::where('biodata_id',auth()->user()->bio->id)){
            return $next($request);
        }
        return redirect('/dashboard');
    }
}
