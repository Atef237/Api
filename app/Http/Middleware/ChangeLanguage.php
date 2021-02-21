<?php

namespace App\Http\Middleware;

use Closure;

class ChangeLanguage
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

        app()->setLocale('ar');
        if(isset($request->lang) && $request -> lang == 'en') //If the app language is English put "en" then set the language to "ar" by default
            app()->setLocale('en');
        
        return $next($request);
    }
}
