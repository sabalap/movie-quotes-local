<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App as FacadesApp;

class Localization
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
	 *
	 * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
	 */
	public function handle(Request $request, Closure $next)
	{
		if (Session()->has('applocale') and array_key_exists(Session()->get('applocale'), config('languages')))
		{
			FacadesApp::setLocale(Session()->get('applocale'));
		}
		else
		{
			FacadesApp::setLocale(config('app.fallback_locale'));
		}
		return $next($request);
	}
}
