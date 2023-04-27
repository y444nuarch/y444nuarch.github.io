<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OnlyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // di sini kita kasih tau apa yang harus dilakukan kalau akun yang login akun bukan admin
        if(Auth::user()->role_id != 1 ){
            return redirect('books');
        }
        //apa yang middleware lakukan kalau akun yang login bukan admin
        return $next($request);
    }
}
