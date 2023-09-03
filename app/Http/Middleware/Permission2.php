<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Permission2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $data): Response
    {
        if (Auth::guard('admin')->check() == true) {
            return $next($request);

        } elseif (Auth::guard('user_model')->check() == true) {

            $auth = Auth::guard('user_model')->user();
            if(array_search($data , $auth->Yetkiler->yetkinlikler)){
                return $next($request);
            };
        }
        abort(401, 'YETKİNİZ BULUNMAMAKTADIR');
    }
}
