<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;

class LanguageManager
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
        $language = explode('-',$request->server('HTTP_ACCEPT_LANGUAGE'))[0];

        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }else {
            App::setLocale($language);
            session()->put('locale', $language);
        }

        return $next($request);
    }
}
