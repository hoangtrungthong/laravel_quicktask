<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationMiddleware
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
        $lang = Session::get('lang', config('app.locale'));
        switch ($lang) {
            case 'en':
                $lang = 'en';
                break;
            default:
                $lang = 'vi';
                break;
        }
        App::setLocale($lang);

        return $next($request);
    }
}
